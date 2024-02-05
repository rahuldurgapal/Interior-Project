<?php

class UserModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function sendMessage($data) {
        $stmt = $this->con->prepare("INSERT INTO request(name, email, subject, message) VALUES (?, ?, ?, ?)");

        if (!$stmt) {
            die('Error in statement preparation: ' . $this->con->error);
        }

        $stmt->bind_param("ssss", $data['name'], $data['email'], $data['subject'], $data['message']);
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

        $stmt = $this->con->prepare("select * from admin where email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();

        $res = $stmt->get_result();
        if($res->num_rows > 0) {
            $_SESSION['otp']=rand(100000,999999);
            $_SESSION['email']=$email;
            header("location: ../login/otp_verification.php");
        }

        else {
            $_SESSION['email_error'] = "The email is not registered";
            header("location: ../login/forgot_password.php");
        }

    }
}




?>