<?php

class DatabaseController {

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "interior_project";

    public function getConnection() {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if($con->connect_error) {
            header("Location: ../error.php"); // Corrected header location
            die("Connection Failed: ". $con->connect_error);
            exit();
        }

        return $con;
    }
}
?>
