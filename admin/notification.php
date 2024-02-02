

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
    <section class="panel notification">
        <link rel="stylesheet" href="../assets/admin_css/notification.css">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here . . .">
            </div>
            <img src="../assets/admin_images/profile.jpg" alt="">
        </div>
        <div class="notification-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-bell"></i>
                    <span class="text">Notifications</span>
                </div>
            </div>
            <div class="activity">
                <div class="search-tools">
                    <div class="title">
                        <i class="uil uil-calender"></i>
                        <span class="text">Today</span>
                    </div>
                    <div class="search">
                        <div style="color: var(--text-color);">
                            Today: <input type="date" id="myDateInput" value = '<?= date("Y-m-d"); ?>' max = '<?= date("Y-m-d"); ?>' >
                        </div>
                    </div>
                </div>
                <div class="notification-data">
                    <div class="notify">
                        <div class="info">
                            <img src="./images/profile.jpg" alt="">
                            <p class="name">Arjun Tripathi</p>
                            <p class="message">Make a Inquiry</p>
                        </div>
                        <p class="time">08:30 AM</p>
                    </div>
                    <div class="notify">
                        <div class="info">
                            <img src="./images/profile.jpg" alt="">
                            <p class="name">Arjun Tripathi</p>
                            <p class="message">Want a meetings</p>
                        </div>
                        <p class="time">08:30 AM</p>
                    </div>
                </div>
            </div>
    </section>

    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>