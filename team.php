<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./assets/images/icon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>DINESH ENTERPRISES | Team</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- Header Part -->
    <?php include("header.php"); ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Team</h1>
            <span>Our professional team members</span>
          </div>
        </div>
      </div>
    </div>

    <div class="team" style="margin: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our team <em>members</em></h2>
              <span>Suspendisse a ante in neque iaculis lacinia</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team-image-1-646x680.jpg" alt="">
              <div class="down-content">
                <h4>William Smith</h4>
                <span>Co-Founder</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>

                <p>
                  <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team-image-2-646x680.jpg" alt="">
              <div class="down-content">
                <h4>Mary Houston</h4>
                <span>Chief Marketing Officer</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                <p>
                  <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team-image-3-646x680.jpg" alt="">
              <div class="down-content">
                <h4>John Doe</h4>
                <span>Financial Analyst</span>
                <p>In sem sem, dapibus non lacus auctor, ornare sollicitudin lacus. Aliquam ipsum urna, semper quis.</p>
                <p>
                  <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Footer Starts Here -->
  <?php   include("footer.php");  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>