<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="./assets/images/icon.png">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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
    <?php include("header.php"); ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>About Us</h1>
            <span>Our company, which was established in 2011, has over a decade of experience in the industry. Through the years, we have honed our skills and expanded our expertise, enabling us to provide high-quality products and services to our clients. </span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>About us</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>An interior design company is a creative and innovative team of professionals dedicated to transforming spaces into captivating environments. With expertise in color theory, spatial arrangement, and a keen eye for detail, our designers curate interiors that reflect individual tastes, lifestyles, and organizational needs. From residential spaces that exude comfort and style to commercial environments that inspire productivity, we craft bespoke designs tailored to each client's vision 
                    <br><br>Whether it's revamping a single room or orchestrating a complete interior overhaul, our goal is to turn concepts into reality, resulting in spaces that not only delight the senses but also enhance everyday living and working experiences. We started the business in the year 2010. And it have been wonderful journey since then till date and aiming for many more beautiful and memorable years. </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/logo.png" style="background-color: #222222" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <!-- <span>Lorem ipsum dolor sit amet</span> -->
              <h2>Your Vision, Our Expertise: <em>Crafting Personalized Interior Design Solutions</em></h2>
              <p>At DR Dinesh Rana Enterprises, we believe in the power of interior design to transform spaces and enhance lives. With over a decade of experience in the industry, our team of expert designers and architects has helped countless clients achieve their vision for their homes and businesses. 
              <br><br>Our portfolio spans a diverse range of projects, from cozy residential interiors to expansive commercial spaces. We pride ourselves on our ability to adapt to any style or budget.</p>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1234</div>
                  <div class="count-title">Properties</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">2280</div>
                  <div class="count-title">Happy clients</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">15</div>
                  <div class="count-title">Cities</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">14</div>
                  <div class="count-title">offices</div>
                </div>
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