<?php

if(isset($_GET['upload'])) {
    $msg = $_GET['upload'];
    echo "<script>alert('$msg');  </script>";
}

include("../models/UserModel.php");
include("../controllers/DatabaseController.php");

 $db = new DatabaseController();
 $con = $db->getConnection();
 $usermodel = new UserModel($con);
 $data = $usermodel->getData();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- It is a Awasome Font Link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Admin home</title>
    <link rel="icon" href="../assets/admin_images/logo.png">
    <link rel="stylesheet" href="../assets/admin_css/style.css">
</head>

<body>
    <?php 
        include("./header.php"); 
    ?>
    <section class="panel dashboard">
        <link rel="stylesheet" href="../assets/admin_css/services.css">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here . . .">
            </div>
            <img src="../assets/admin_images/profile.jpg" alt="">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-building"></i>
                    <span class="text">Services</span>
                </div>
                <div class="boxes">
                    <div class="box box1" value="living-room">
                        <i class="uil uil-building"></i>
                        <span class="text">Living Room</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box2" value="bedroom">
                        <i class="uil uil-building"></i>
                        <span class="text">BedRoom</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box3" value="decor-wall">
                        <i class="uil uil-building"></i>
                        <span class="text">Decor Wall</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box1" value="balcony">
                        <i class="uil uil-building"></i>
                        <span class="text">Balcony</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box2" value="dinning-table">
                        <i class="uil uil-building"></i>
                        <span class="text">Dinning Table</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box3" value="kitchen">
                        <i class="uil uil-building"></i>
                        <span class="text">Kitchen</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box1" value="stair">
                        <i class="uil uil-building"></i>
                        <span class="text">Stair</span>
                        <span class="number">picture</span>
                    </div>

                    <div class="box box2" value="theater">
                        <i class="uil uil-building"></i>
                        <span class="text">Theater</span>
                        <span class="number">picture</span>
                    </div>
                </div>
            </div>
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div id="userData">
                        <!-- Content will be dynamically filled in by JavaScript -->
                    </div>
                </div>
            </div>

        </div>
    </section>
    <style>
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var boxes = document.querySelectorAll('.box');
            
            boxes.forEach(function (box) {
                box.addEventListener('click', function () {
                    var value = box.getAttribute('value');
                    console.log(value);
                    var number = box.querySelector('.number').innerText.replace(/\D/g, '');

                    console.log("Number: " + number);
                    uploadImageForm(value,number);
                });
            });
        });

        
    </script>
    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>