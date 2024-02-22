<?php
 $url = $usermodel->getUrl();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="assets/images/icon.png">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>DINESH ENTERPRISES | About</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

    <!-- Header Part -->
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
          <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="" style="width:50%"></a>
          
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



    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Designed <?=  $query.'s'   ?></h1>
                    <span>We have over 14 years of experience</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <!-- All row came here -->
                <?php  for($i=0;$i<sizeof($data);$i++) { ?>
                
                 <div class="col-md-4">
                    <div class="service-item" onclick="zoomIn(this)">
                        <img src="assets/product-images/<?= $data['folder'] ?>/<?= $data[$i]['image'] ?>" alt="">
                    </div>
                    <br>
                </div> 
        <?php  }  ?>
            </div>

            <br>
            <br>
        </div>
    </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
              <img src="assets/images/logo.png"  alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Who we are</span>
                <h2>Get to know about <em>our company</em></h2>
                <p>At DR Dinesh Rana Enterprises, we believe in the power of interior design to transform spaces and enhance lives. With over a decade of experience in the industry, our team of expert designers and architects has helped countless clients achieve their vision for their homes and businesses.</p>
                <a href="about.php" class="filled-button">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Footer Starts Here -->
    <?php  include("footer.php");    ?>


    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
              Copyright © 2024 DineshRanaEnterprises
              - Designed by: <a href="#">Development Team</a>
          </p>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) {                   //declaring the array outside of the
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value = '';         // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>
    <script>
        function zoomIn(element) {
            // Create a container for the zoomed image
            var zoomContainer = document.createElement("div");
            zoomContainer.id = "zoom-container";

            // Create the zoomed image
            var zoomedImage = document.createElement("img");
            zoomedImage.src = element.querySelector("img").src;
            zoomedImage.id = "zoomed-image";

            // Create close button
            var closeButton = document.createElement("span");
            closeButton.id = "close-button";
            closeButton.innerHTML = "&times;";
            closeButton.onclick = function () {
                document.body.removeChild(zoomContainer);
            };

            // Append elements to the container
            zoomContainer.appendChild(zoomedImage);
            zoomContainer.appendChild(closeButton);

            // Append container to the body
            document.body.appendChild(zoomContainer);

            // Add event listener to close on Esc key press
            document.addEventListener("keydown", function (event) {
                if (event.key === "Escape") {
                    document.body.removeChild(zoomContainer);
                }
            });
        }
    </script>

</body>

</html>