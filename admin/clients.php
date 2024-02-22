<?php

include("../models/UserModel.php");
include("../controllers/DatabaseController.php");

 $db = new DatabaseController();
 $con = $db->getConnection();
 $usermodel = new UserModel($con);
 $data = $usermodel->getClients();

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
                    <span class="text">Clients</span>
                    <i class="uil uil-plus" style="margin-left: auto" onclick="addClient()"></i>
                </div>

                <div class="boxes">
                    <?php  for($i=0;$i<sizeof($data);$i++) { ?>
                    <div class="box box1" value="client1">
                        <i class="uil uil-user"></i>
                        <span class="text"><?= $data[$i]['client_company'] ?></span>
                        <span class="text1" style="display: none;"><?php echo"client_".$data[$i]['id'] ?></span>
                        <span class="number">picture</span>
                    </div>
                    <?php  }   ?>
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
                    var table = box.querySelector('.text1').innerText;

                    console.log("Number: " + number);
                    console.log("Table: "+table);
                    uploadClientImageForm(value,name,table,number);
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
                    <form action="../controllers/AppController.php?action=addClient" method="post">
                        <lable>Name: </lable>
                        <input type="hidden" name="client_id" value=<?= $i ?> />
                        <input type="text" name="client_name" placeholder="Enter Client name" />
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