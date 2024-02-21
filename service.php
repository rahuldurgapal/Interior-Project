<?php
include("controllers/DatabaseController.php");
include("models/UserModel.php");

$db = new DatabaseController();
$con = $db->getConnection();
$usermodel = new UserModel($con);

$query = $con->real_escape_string($_GET['q']);

switch($query) {

    case 'living-room':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'bedroom':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'decor-wall':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'balcony':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'dining-table':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'kitchen':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'stair':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    case 'theater':
        $data = $usermodel->getService($query);
        $data['folder']=$query;
        include("components/service.php");
        break;
    default:
        header("location: error.php");

}

?>