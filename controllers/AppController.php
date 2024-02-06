<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
       $subject = filter_input(INPUT_POST, "subject");
       $message = filter_input(INPUT_POST, "message");
       
       if(!$name || !$email || !$subject || !$message) {
        echo "Invalid Input";
        header("location: ../index.php");
      }

       $usermodel->sendMessage(['name'=>$name, 'email'=>$email, 'subject'=>$subject, 'message'=>$message]);
       if(!$name || !$email || !$subject || !$message) {
        echo "Invalid Input";
        header("location: ../index.php");
      }
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

      if(!$pass || !$cnf_pass) {
         header("location: ../login/change-password.php?pass_error=Invalid input");
      }

      else if($pass != $cnf_pass) {
         header("location: ../login/change-password.php?pass_error=Password are not matched");
      }

      else {
         $status = $usermodel->changePassword($pass);
         header("location: ../login/index.php?cnf_success=Password Changed Successfully");
      }

    }

     else {
        echo "<h1> 404 Page not found </h1>";
     }
   






?>