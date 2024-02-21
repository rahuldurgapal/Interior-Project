<?php

error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class UserModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function sendMessage($data) {
        $stmt = $this->con->prepare("INSERT INTO request(name, email, phone, message) VALUES (?, ?, ?, ?)");

        if (!$stmt) {
            die('Error in statement preparation: ' . $this->con->error);
        }

        $stmt->bind_param("ssss", $data['name'], $data['email'], $data['phone'], $data['message']);
        $stmt->execute();

        if ($stmt->error) {
            die('Error in statement execution: ' . $stmt->error);
        }

        $stmt->close();
    }

    public function getUserByEmail($email) {
        $stmt = $this->con->prepare("select * from admin where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $res = $stmt->get_result();

        return $res->fetch_assoc();
    }

    public function getUrl() {
        $stmt = $this->con->prepare("select * from social_link");
        $stmt->execute();
        $res = $stmt->get_result();

        return $res->fetch_assoc();
    }

    public function updateUrl($url) {
        $stmt = $this->con->prepare("update social_link set facebook=?, linkedin=?, twitter=?, whatsapp=?");
        $stmt->bind_param("ssss",$url['facebook'],$url['linkedin'], $url['twitter'], $url['whatsapp']);
        $stmt->execute();
    }


    public function checkUserMail($email) {

        $sataus=0;
        $stmt = $this->con->prepare("select * from admin where email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();

        $res = $stmt->get_result();
        if($res->num_rows > 0) {
            $status=1;
            return $status;
        }

       return $sataus;
           
    }


    public function changePassword($pass,$email) {
       $stmt = $this->con->prepare("update admin set password=? where email=?");
       $stmt->bind_param("ss",$pass,$email);
       $stmt->execute();
    }


    public function getData() {
        $stmt = $this->con->prepare("SELECT * FROM request");
$stmt->execute();

$result = $stmt->get_result();
$dataArray = array();


if ($result->num_rows > 0) {
   
    while ($row = $result->fetch_assoc()) {
        $dataArray[] = $row;
    }
} 

$stmt->close();

return $dataArray;
    }

    public function deleteRequest($id) {

        $stmt = $this->con->prepare("delete from request where id = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }


    public function sendMail($email,$otp) {
         $mail = new PHPMailer(true);

    try{
         $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Your SMTP server
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';  // Use 'tls' or 'ssl'
    $mail->Port = 587;  // SMTP port (tls: 587, ssl: 465)

    // Email content
    $mail->setFrom('rahuldurgapal4@gmail.com', 'Rahul Durgapal');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'This is the subject';
    $mail->Body = '<b>This is HTML message.</b><h1>This is the headline.</h1> <br> <br> <p> Your otp is: '.$otp . '</p>';

    // Send the email
    $mail->send();
    echo 'Message sent successfully...';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    }


    public function sendEmail($email) {
        $mail = new PHPMailer(true);

   try{
        $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';  // Your SMTP server
   $mail->SMTPAuth = true;
   $mail->SMTPSecure = 'tls';  // Use 'tls' or 'ssl'
   $mail->Port = 587;  // SMTP port (tls: 587, ssl: 465)

   // Email content
   $mail->setFrom('rahuldurgapal4@gmail.com', 'Rahul Durgapal');
   $mail->addAddress($email);
   $mail->isHTML(true);
   $mail->Subject = 'This is the subject';
   $mail->Body = "<!DOCTYPE html>
   <html lang='en'>
   <head>
       <meta charset='UTF-8'>
       <meta http-equiv='X-UA-Compatible' content='IE=edge'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <title>We Will Connect You Soon</title>
       <style>
   body {
       font-family: 'Arial', sans-serif;
       background-color: #f4f4f4;
       margin: 0;
       padding: 0;
       text-align: center;
   }

   .container {
       max-width: 600px;
       margin: 0 auto;
       padding: 20px;
       background-color: #ffffff;
       border-radius: 10px;
       box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   }

   img {
       max-width: 100%;
       height: auto;
       border-radius: 5px;
       margin-bottom: 20px;
   }

   h2 {
       color: #333333;
       margin-bottom: 15px;
   }

   p {
       color: #666666;
       line-height: 1.6;
       margin-bottom: 20px;
   }

   /* Responsive Styles */
   @media screen and (max-width: 600px) {
       .container {
           padding: 15px;
       }
   }
</style>
   </head>
   <body>
       <div class='container'>
          
           <h2>We Will Connect You Soon</h2>
           <p>Thank you for reaching out. Our team will connect with you soon.</p>
       </div>
   </body>
   </html>";

   // Send the email
   $mail->send();
   echo 'Message sent successfully...';
} catch (Exception $e) {
   echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
   }

   public function getService($service) {
    
// Assuming $service is a trusted input or has been sanitized properly
   $stmt = $this->con->prepare("SELECT * FROM `$service`");

    //  $stmt->bind_param("s",$service);
     $stmt->execute();
     $res=$stmt->get_result();

    return $res->fetch_assoc();

   }
}



?>