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
       header("location: ../index.php");

    }

    else if($action === 'admin-login' && $_SERVER['REQUEST_METHOD']=='POST') {
       
      $email = filter_input(INPUT_POST, 'email');
      $password = filter_input(INPUT_POST, 'password');

      if(!$email || !$password) {
         $_SESSION['error']="Invalid email or password";
         // echo "login failed 1";
          header("location: ../login/index.php");
      }

      $user = $usermodel->getUserByEmail($email);

      if($user && $password==$user['password']) {
         $_SESSION['id']=$user['id'];
         $_SESSION['name']=$user['name'];
         
         header("location: ../admin/index.php");
         exit();
      }
      else {
         $_SESSION['error']="Invalid Email Or Password";
         header("location: ../login/index.php");
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
         $_SESSION['mail_error']="please input valid email";
         header("location: ../login/forgot_password.php");
       }

       echo "email ok";

       $status = $usermodel->checkUserMail($email);
       if($status==1) {
         $_SESSION['otp']= rand(100000,999999);
         header("location: ../login/otp_varification.php");
       }
       else {
          $_SESSION['mail_error'] = "The email is not registered";
            header("location: ../login/forgot-password.php");
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
         $_SESSION['otp_error'] = "OTP is not verify, Please enter correct otp";
         header("location: ../login/otp_varification.php");
      }

    }

    else if($action === 'cnf_pass' && $_SERVER['REQUEST_METHOD']==='POST') {

      $pass = filter_input(INPUT_POST, 'password');
      $cnf_pass = filter_input(INPUT_POST, 'confirm_password');

      if(!$pass || !$cnf_pass) {
         $_SESSION['pass_error'] = "Invalid input";
         header("location: ../login/change-password.php");
      }

      else if($pass != $cnf_pass) {
         $_SESSION['pass_error'] = "Password are not matched";
         header("location: ../login/change-password.php");
      }

      else {
         $status = $usermodel->changePassword($pass);
         $_SESSION['cnf_success']="Password Changed Successfully";
         header("location: ../login/index.php");
      }

    }

     else {
        echo "<h1> 404 Page not found </h1>";
     }
   






?>