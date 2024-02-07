<?php

error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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


    public function changePassword($pass) {
       $stmt = $this->con->prepare("update admin set password=?");
       $stmt->bind_param("s",$pass);
       $stmt->execute();
    }


    public function getData() {
        $stmt = $this->con->prepare("SELECT * FROM request");
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Initialize an array to store the data
$dataArray = array();

// Check the number of rows returned
if ($result->num_rows > 0) {
    // Fetch each row and add it to the array
    while ($row = $result->fetch_assoc()) {
        $dataArray[] = $row;
    }
} else {
    // No rows found in the database
    echo "No rows found.";
}

// Close the statement
$stmt->close();

return $dataArray;
    }
}




?>