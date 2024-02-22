<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$con=mysqli_connect("localhost","root","","test");


if($_SERVER['REQUEST_METHOD']==='POST') {

   $targetDirctory = "assets/uploads/";
   $targetFile = $targetDirctory. basename($_FILES['image']['name']);

   if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)) {
    $filename = $_FILES['image']['name'];

    $sql = "insert into images(image) values ('$filename')";
    if($con->query($sql)==TRUE) {
        echo "file uploades successfully in database";
    }
    else {
        echo "file uploades failed in database";
    }
   }
   else {
    echo "file uplode failed in local directory";
   }
}




?>