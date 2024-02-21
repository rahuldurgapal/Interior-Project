 
 <?php

 error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 include("controllers/DatabaseController.php");
 include("models/UserModel.php");

 $db = new DatabaseController();
 $con = $db->getConnection();
 $usermodel = new UserModel($con);
 $url = $usermodel->getUrl();

?>
 
 <!-- ***** Preloader Start ***** -->
 <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>dineshenterprises@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>9845528892</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="<?= $url['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?= $url['twitter']; ?>" target="_balnk"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?= $url['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="./assets/images/logo.png" alt="" style="width:50%"></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
             
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="properties.php" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
              
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="properties.php">Services</a> -->
                    <a class="dropdown-item" href="service.php?q=living-room">Livinig Room</a>
                    <a class="dropdown-item" href="service.php?q=bedroom">Bedroom</a>
                    <a class="dropdown-item" href="service.php?q=decor-wall">Decor Wall</a>
                    <a class="dropdown-item" href="service.php?q=balcony">Balcony</a>
                    <a class="dropdown-item" href="service.php?q=dining-table">Dining Table</a>
                    <a class="dropdown-item" href="service.php?q=kitchen">Kitchen</a>
                    <a class="dropdown-item" href="service.php?q=stair">Stair</a>
                    <a class="dropdown-item" href="service.php?q=theater">Theater</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./clients.php">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>