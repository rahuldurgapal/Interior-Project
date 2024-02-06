


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
        <link rel="stylesheet" href="../assets/admin_css/deshboard.css">
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
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div id="userData">
                    <!-- Content will be dynamically filled in by JavaScript -->
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-two"></i>
                    <span class="text">Recent Enquiry</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list users-name">Arjun Tripathi</span>
                        <span class="data-list users-name">Rahul Durgapal</span>
                        <span class="data-list users-name">Sagar Chuhan</span>
                        <span class="data-list users-name">Niket Narayan</span>
                    </div>

                    <div class="data emails">
                        <span class="data-title">Email</span>
                        <span class="data-list users-email">mearjuntripathi@gmail.com</span>
                        <span class="data-list users-email">rahuldurgapal@gmail.com</span>
                        <span class="data-list users-email">sagarvns@gmail.com</span>
                        <span class="data-list users-email">narayanniket@gmail.com</span>
                    </div>

                    <div class="data mobiles">
                        <span class="data-title">Phone</span>
                        <span class="data-list users-phone">+91 9876453210</span>
                        <span class="data-list users-phone">+91 9876453210</span>
                        <span class="data-list users-phone">+91 9876453210</span>
                        <span class="data-list users-phone">+91 9876453210</span>
                    </div>

                    <div class="data inquiry" style="display:none">
                        <span class="data-title">inquiry</span>
                        <span class="data-list users-inquiry">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam repudiandae esse aperiam accusamus, delectus consequatur architecto molestiae distinctio, blanditiis recusandae voluptatum nisi molestias impedit. Suscipit illum doloremque necessitatibus totam laborum!</span>
                        <span class="data-list users-inquiry">paragraph2</span>
                        <span class="data-list users-inquiry">paragraph3</span>
                        <span class="data-list users-inquiry">paragraph4</span>
                    </div>

                    <div class="data joined">
                        <span class="data-title">Date</span>
                        <span class="data-list date">02/01/2024</span>
                        <span class="data-list date">02/01/2024</span>
                        <span class="data-list date">02/01/2024</span>
                        <span class="data-list date">02/01/2024</span>
                    </div>

                    <div class="data status">
                        <span class="data-title">Action</span>
                        <span class="data-list view-btn">View</span>
                        <span class="data-list view-btn">View</span>
                        <span class="data-list view-btn">View</span>
                        <span class="data-list view-btn">View</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        
    </style>


    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>