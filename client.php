<?php

if(!isset($_GET['id']) || !isset($_GET['name']) || $_GET['name']=="")
 header("location: clients.php");

include("controllers/DatabaseController.php");
include("models/UserModel.php");

$db = new DatabaseController();
$con = $db->getConnection();
$usermodel = new UserModel($con);

$id = $con->real_escape_string($_GET['id']);
$name=$_GET['name'];

$query="client_".$id;

$tables = $usermodel->getTables();

if(in_array($query,$tables)) {
  $url = $usermodel->getUrl();
  $data=$usermodel->getClientImage($query);
  include("components/client.php");
}

else
 header("location: clients.php");


?>