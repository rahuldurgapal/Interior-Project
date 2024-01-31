<?php
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

     else {
        echo "<h1> 404 Page not found </h1>";
     }
   






?>