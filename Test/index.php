<?php
include("DatabaseController.php");
include("UserModel.php");

$db = new DatabaseController();
$con = $db->getConnection();
$userModel = new UserModel($con);

$allUsers = $userModel->getAllUsers();

// Now $allUsers contains an array of all users from the database

echo "<pre>";
print_r($allUsers);
echo "</pre>";
?>
