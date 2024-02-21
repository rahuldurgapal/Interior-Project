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

  <title>DINESH ENTERPRISES | Clients</title>

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
          <h1>Our Clients</h1>
          <span>"Our clients are at the heart of everything we do. We partner with businesses to understand their unique needs and provide exceptional design solutions that exceed expectations. .</span>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/Arrow.jpg" alt="">
            </div> -->
            <div class="down-content">
              <h4>Arrow</h4>

              <p>info</p>

              <a href="" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/autoliv-logo.png" alt="">
            </div> -->
            <div class="down-content">
              <h4>Autoliv</h4>

              <p>info</p>

              <a href="" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/brigade-logo.png" alt="">
            </div> -->
            <div class="down-content">
              <h4>Brigade</h4>

              <p>info</p>

              <a href="" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/l&t.png" alt="">
            </div> -->
            <div class="down-content">
              <h4>Larsen & Toubro</h4>

              <p>info</p>

              <a href="" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/levi's.jpg" alt="">
            </div> -->
            <div class="down-content">
              <h4>Levi's</h4>

              <p>info</p>

              <a href="./dining-table.php" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

        <div class="col-md-4">
          <div class="service-item">
            <!-- <div onclick="zoomIn(this)">
              <img src="./assets/clients_image/brady-worldwide.png" alt="">
            </div> -->
            <div class="down-content">
              <h4>Brady</h4>

              <p>info</p>

              <a href="" class="filled-button">View More</a>
            </div>
          </div>

          <br>
        </div>

      </div>

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