<?php

$action = $_GET['action'] ?? 'home';

include("controllers/AppController.php");

$appController = new AppController();

switch($action) {
    
    case 'home':
        $appController->home();
        break;
    case 'properties':
        $appController->properties();
        break;
    case 'about':
        $appController->about();
        break;
    case 'contact':
        $appController->contact();
        break;
    case 'team':
        $appController->team();
        break;
    case 'blog':
        $appController->blog();
        break;
    case 'testimonials':
        $appController->testimonials();
        break;
    case 'terms':
        $appController->terms();
        break;
    default:
      echo "<h1>404 Page Not Found";
      break;
}


?>