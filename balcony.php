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
                    <h1>Our Designed Balconies</h1>
                    <span>We have over 14 years of experience</span>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info about-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item" onclick="zoomIn(this)">
                        <img src="./assets/product-images/balcony/balcony1.jpg" alt="">
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item" onclick="zoomIn(this)">
                        <img src="./assets/product-images/balcony/balcony2.jpg" alt="">
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <div class="service-item" onclick="zoomIn(this)">
                        <img src="./assets/product-images/balcony/balcony3.jpg" alt="">
                    </div>
                    <br>
                </div>

            </div>

            <br>
            <br>
        </div>
    </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        <span>Lorem ipsum dolor sit amet</span>
                        <h2>Modi esse sapiente tenetur <em>impedit laudantium laborum</em></h2>
                        <p>Pellentesque ultrices at turpis in vestibulum. Aenean pretium elit nec congue elementum.
                            Nulla luctus laoreet porta. Maecenas at nisi tempus, porta metus vitae, faucibus augue.
                            <br><br>Fusce et venenatis ex. Quisque varius, velit quis dictum sagittis, odio velit
                            molestie nunc, ut posuere ante tortor ut neque.
                        </p>
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