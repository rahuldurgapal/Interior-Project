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
    <section class="panel setting">
        <link rel="stylesheet" href="../assets/admin_css/setting.css">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here . . .">
            </div>
            <img src="../assets/admin_images/profile.jpg" alt="">
        </div>
        <div class="setting-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-setting"></i>
                    <span class="text">Settings</span>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-edit"></i>
                    <span class="text">Hi, Admin Edit your company details</span>
                </div>
                <form class="edits" action="" method="">
                    <div class="input">
                        <label for="">Campany facebook URL :</label>
                        <input type="url">
                    </div>
                    <div class="input">
                        <label for="">Campany Instagram URL :</label>
                        <input type="url">
                    </div>
                    <div class="input">
                        <label for="">Campany Twitter URL :</label>
                        <input type="url">
                    </div>
                    <div class="input">
                        <label for="">Campany Whatapp URL :</label>
                        <input type="url">
                    </div>
                    <div class="input" style="flex-direction: column; align-items: center; gap: 30px;">
                        <button type="submit">Submit</button>
                        <a href="">Change Password</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="../assets/admin_js/script.js" defer></script>
</body>

</html>