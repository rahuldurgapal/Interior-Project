<?php

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
        <link rel="stylesheet" href="../assets/admin_css/clients.css">
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
                    <i class="uil uil-users-alt"></i>
                    <span class="text">Services</span>
                    <i class="uil uil-plus" style="margin-left: auto" onclick="addClient()"></i>
                </div>

                <div class="boxes">
                    <div class="box box1" value="client1">
                        <i class="uil uil-user"></i>
                        <span class="text">Arrow</span>
                        <span class="number">16 picture</span>
                    </div>

                    <div class="box box1" value="client2">
                        <i class="uil uil-user"></i>
                        <span class="text">Autoliv</span>
                        <span class="number">21 picture</span>
                    </div>

                    <div class="box box1" value="client3">
                        <i class="uil uil-user"></i>
                        <span class="text">Brigade</span>
                        <span class="number">11 picture</span>
                    </div>

                    <div class="box box1" value="client4">
                        <i class="uil uil-user"></i>
                        <span class="text">Larsen & Toubro</span>
                        <span class="number">3 picture</span>
                    </div>

                    <div class="box box1" value="client5">
                        <i class="uil uil-user"></i>
                        <span class="text">Levi's</span>
                        <span class="number">3 picture</span>
                    </div>

                    <div class="box box1" value="client6">
                        <i class="uil uil-user"></i>
                        <span class="text">Brady</span>
                        <span class="number">3 picture</span>
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
                    var name = box.querySelector('.text').innerText;

                    console.log("Number: " + number);
                    uploadClientImageForm(value,name,number);
                });
            });
        });

        function addClient(){
            var userDataDiv = document.getElementById("userData");
            userDataDiv.innerHTML = `
                    <h2>Add New Client</h2>
                    <br>
                    <hr>
                    <br>
                    <form action="" method="post">
                        <lable>Name: </lable>
                        <input name="name" placeholder="Enter Client name" />
                        <br>
                        <br>
                        <lable>Info: </lable>
                        <input name="info" placeholder="info" />
                        <br>
                        <br>
                        <button name="submit">Upload</button>
                    <form>
                    `;
            modal.style.display = "block";
        }
    </script>
    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>