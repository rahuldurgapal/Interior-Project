<?php
// error_reporting(E_WARNING|E_NOTICE);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();

 include("DatabaseController.php");
include("../models/UserModel.php");
$action = $_GET['action'];


    
   $db = new DatabaseController();
   $con = $db->getConnection();
    $usermodel = new UserModel($con);
     


    if($action === "send_request") {
       $name = filter_input(INPUT_POST, "name");
       $email = filter_input(INPUT_POST, "email");
       $phone = filter_input(INPUT_POST, "phone");
       $message = filter_input(INPUT_POST, "message");
       
       if(!$name || !$email || !$subject || !$message) {
        echo "Invalid Input";
        header("location: ../index.php");
      }

       $usermodel->sendMessage(['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'message'=>$message]);
       $usermodel->sendEmail($email);
      $_SESSION['request'] = "Successfully request submitted";
       header("location: ../index.php");

    }

    else if($action === 'admin-login' && $_SERVER['REQUEST_METHOD']==='POST') {
       
      $email = filter_input(INPUT_POST, 'email');
      $password = filter_input(INPUT_POST, 'password');

      if(!$email || !$password) {
          header("location: ../login/index.php?error=Invalid email or password");
      }

      $user = $usermodel->getUserByEmail($email);

      if($user && $password==$user['password']) {
         $_SESSION['id']=$user['id'];
         $_SESSION['name']=$user['name'];
         
         header("location: ../admin/index.php");
         exit();
      }
      else {

         header("location: ../login/index.php?error=Invalid Email Or Password");

         // print_r($user);
         // exit();
      }

    }

    else if($action === 'logout') {
     
      session_unset();
      session_destroy();
      header("location: ../login/index.php");

    }

    else if($action === 'setting' && $_SERVER['REQUEST_METHOD']=="POST") {
       
      $facebook = filter_input(INPUT_POST, 'facebook');
      $linkedin = filter_input(INPUT_POST, 'linkedin');
      $twitter = filter_input(INPUT_POST, 'twitter');
      $whatsapp = filter_input(INPUT_POST, 'whatsapp');

      if(!$facebook || !$linkedin || !$twitter || !$whatsapp) {
         $_SESSION['url_error'] = "Invalid url";
         header("location: ../admin/setting.php");
         exit();
      }

      $data = array('facebook'=>$facebook, 'linkedin'=>$linkedin, 'twitter'=>$twitter, 'whatsapp'=>$whatsapp);

      $usermodel->updateUrl($data);
      header("location: ../admin/setting.php");
         
    }

    else if($action==='forgot_password' && $_SERVER['REQUEST_METHOD']==="POST") {

       $email = filter_input(INPUT_POST, 'mail');

       if(!$email) {
         header("location: ../login/forgot_password.php?mail_error=please input valid email");
       }

       $status = $usermodel->checkUserMail($email);
       if($status==1) {
         $_SESSION['otp']= rand(100000,999999);
         $_SESSION['email']=$email;
         $otp = $_SESSION['otp'];
         $usermodel->sendMail($email,$otp);
         header("location: ../login/otp_varification.php");
       }
       else {
            header("location: ../login/forgot-password.php?mail_error=The email is not registered");
       }
    }

    else if($action === 'otp_verify' && $_SERVER['REQUEST_METHOD']==='POST') {

      $otp = filter_input(INPUT_POST, 'otp');
      if($otp == $_SESSION['otp']){
  
           //Mail function, SMTP

         $_SESSION['otp_verified']="otp verify";
         header("location: ../login/change-password.php");
      }

      else {
         header("location: ../login/otp_varification.php?otp_error=OTP is not verify, Please enter correct otp");
      }

    }

    else if($action === 'cnf_pass' && $_SERVER['REQUEST_METHOD']==='POST') {

      $pass = filter_input(INPUT_POST, 'password');
      $cnf_pass = filter_input(INPUT_POST, 'confirm_password');
      $email = $_SESSION['email'];

      if(!$pass || !$cnf_pass) {
         header("location: ../login/change-password.php?pass_error=Invalid input");
      }

      else if($pass != $cnf_pass) {
         header("location: ../login/change-password.php?pass_error=Password are not matched");
      }

      else {
         $status = $usermodel->changePassword($pass,$email);
         unset($_SESSION['email']);
         header("location: ../login/index.php?cnf_success=Password Changed Successfully");
      }

    }

    else if ($action === "deleteRequest" && isset($_GET['request_id'])) {
      
      $usermodel->deleteRequest($_GET['request_id']);
      $_SESSION['delete']="Request Delete Successfully";
      header("location: ../admin/inquiry.php");
  }

  else if($action === "uploadServiceImage" && $_SERVER['REQUEST_METHOD']==='POST') {
    
    $folder = filter_input(INPUT_POST,'folder');
    $targetDirectory = "../assets/product-images/".$folder."/";
    $targetFile = $targetDirectory.basename($_FILES['image']['name']);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)) {

      $status = $usermodel->uploadServiceImage($_FILES['image']['name'],$folder);
      if($status==1) {
         header("location: ../admin/services.php?upload=file upload successfully");
      }
      else {
         echo "file not uploades in database";
      }
    }
    else {
      echo "file not uploades in local folder";
    }

 }

   else if($action==='addClient' && $_SERVER['REQUEST_METHOD']==='POST') {
      $id = filter_input(INPUT_POST,'client_id');
      $name = filter_input(INPUT_POST,'client_name');
      
     // Add Client
      if($usermodel->addClient($name)) {
         if($usermodel->createClient()) {
            header("location: ../admin/clients.php?q=client add successfully");
         } else {
            echo "failed to create client table";
         }
      } else {
         echo "failed to insert data in client table";
      }

   }

   else if($action==='uploadClientImage' && $_SERVER['REQUEST_METHOD']==='POST') {

      $table = filter_input(INPUT_POST,'table');
      $targetDirectory = "../assets/clients_image/";
      $targetFile = $targetDirectory.basename($_FILES['image']['name']);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)) {

      $status = $usermodel->uploadClientImage($_FILES['image']['name'],$table);
      if($status==1) {
         header("location: ../admin/clients.php?upload=file upload successfully");
      }
      else {
         echo "file not uploades in database";
      }
    }
    else {
      echo "file not uploades in local folder";
    }
      
   }
  

     else {
        echo "<h1> 404 Page not found </h1>";
     }
   






?>