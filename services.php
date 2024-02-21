<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="icon" href="./assets/images/icon.png">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>DINESH ENTERPRISES | Properties</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

  <!-- Header Part -->
  <?php include("components/header.php"); ?>

  <!-- Page Content -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Our Services</h1>
          <span>Comprehensive Interior Design Solutions for Residential and Commercial Spaces.</span>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="service-item" >
            <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/living-room/living-room14.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Living Rooms</h4>

              <p>info</p>

              <a href="./living-room.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/bedroom/bedroom10.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Bedrooms</h4>

              <p>info</p>

              <a href="./bedroom.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/kitchen/kitchen3.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Kitchens</h4>

              <p>info</p>

              <a href="./kitchen.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/decor-wall/decor-wall8.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Decor Wall</h4>

              <p>info</p>

              <a href="./decor-wall.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/balcony/balcony2.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Balcony</h4>

              <p>info</p>

              <a href="./balcony.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/dining-table/dining-table3.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Dining Table</h4>

              <p>info</p>

              <a href="./dining-table.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/stair/stair2.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Stair</h4>

              <p>info</p>

              <a href="./stair.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
          <div onclick="zoomIn(this)">
              <img  src="./assets/product-images/theater/theater1.jpg" alt="">
            </div>
            <div class="down-content">
              <h4>Our Designed Theater</h4>

              <p>info</p>

              <a href="./theater.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

      </div>

      <br>
      <br>

      <!-- <nav>
        <ul class="pagination pagination-lg justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">«</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">»</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav> -->

      <br>
      <br>
      <br>
      <br>
    </div>
  </div>

  <!-- Footer Starts Here -->
  <?php   include("components/footer.php");  ?>

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