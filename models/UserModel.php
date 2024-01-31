<?php

class UserModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;

        // Assuming you have a database named 'your_database_name'
        // Replace 'your_database_name' with your actual database name.
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
}




?>