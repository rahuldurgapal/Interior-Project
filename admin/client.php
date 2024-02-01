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
    <section class="panel clients">
        <link rel="stylesheet" href="../assets/admin_css/clients.css">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here . . .">
            </div>
            <img src="../assets/admin_images/profile.jpg" alt="">
        </div>
        <div class="clients-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-eye"></i>
                        <span class="text">Total Views</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-user"></i>
                        <span class="text">Total Clients</span>
                        <span class="number">11,216</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-building"></i>
                        <span class="text">Total Properties</span>
                        <span class="number">5,110</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="search-tools">
                    <div class="title">
                        <i class="uil uil-users-alt"></i>
                        <span class="text">All Avilable Clients</span>
                    </div>
                    <div class="search">
                        <div class="input">
                            <input type="text" placeholder="Search Clients . . .">
                            <button><i class="uil uil-search"></i></button>
                        </div>
                        <div>
                            Short BY: <select name="Catagory" id="">
                                <option value="">Newest</option>
                                <option value="">Older</option>
                                <option value="">Alphabet</option>
                                <option value="">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Clients Name</span>
                        <span class="data-list"> <img src="./images/profile.jpg" alt=""> Arjun Tripathi</span>
                        <span class="data-list"> <img src="./images/profile.jpg" alt=""> Rahul Durgapal</span>
                        <span class="data-list"> <img src="./images/profile.jpg" alt=""> Sagar Chuhan</span>
                        <span class="data-list"> <img src="./images/profile.jpg" alt=""> Niket Narayan</span>
                    </div>

                    <div class="data emails">
                        <span class="data-title">Email</span>
                        <span class="data-list">mearjuntripathi@gmail.com</span>
                        <span class="data-list">rahuldurgapal@gmail.com</span>
                        <span class="data-list">sagarvns@gmail.com</span>
                        <span class="data-list">narayanniket@gmail.com</span>
                    </div>

                    <div class="data joined">
                        <span class="data-title">Catagory</span>
                        <span class="data-list">Buyer</span>
                        <span class="data-list">Buyer</span>
                        <span class="data-list">Buyer</span>
                        <span class="data-list">Buyer</span>
                    </div>

                    <div class="data joined">
                        <span class="data-title">Join-Date</span>
                        <span class="data-list">12-dec-2023</span>
                        <span class="data-list">11-dec-2023</span>
                        <span class="data-list">10-dec-2023</span>
                        <span class="data-list">09-dec-2023</span>
                    </div>

                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">View</span>
                        <span class="data-list">View</span>
                        <span class="data-list">View</span>
                        <span class="data-list">View</span>
                    </div>
                </div>
            </div>
    </section>

    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>