<?php
include("DatabaseController.php");
include("../models/UserModel.php");

$db = new DatabaseController();
$con = $db->getConnection();
$usermodel = new UserModel($con);

$query = $con->real_escape_string($_GET['q']);

switch($query) {

    case 'living-room':
        $data = $usermodel->getService($query);
        include("../service.php");
        break;
}

?>