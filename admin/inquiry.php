
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
    <section class="panel inquiry">
        <link rel="stylesheet" href="../assets/admin_css/inquiry.css">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here . . .">
            </div>
            <img src="../assets/admin_images/profile.jpg" alt="">
        </div>
        <div class="inquiry-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-question"></i>
                    <span class="text">Enquiries</span>
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
                <div class="search-tools">
                    <div class="title">
                        <i class="uil uil-calender"></i>
                        <span class="text">All Days</span>
                    </div>
                    <div class="search">
                        <div style="color: var(--text-color);">
                            Today: <input type="date" id="myDateInput" value = '<?= date("Y-m-d"); ?>' max = '<?= date("Y-m-d"); ?>' >
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
                        <span class="data-list users-inquiry">paragraph1</span>
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
    </section>

    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>