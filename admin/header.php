<?php 
        include("./preloader.php"); 
?>
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../assets/admin_images/logo.png" alt="">
            </div>

            <span class="logo_name">Enterprises</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li>
                    <a href="./index.php" id="">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="./client.php" id="">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">Clients</span>
                    </a>
                </li>
                <li>
                    <a href="./notification.php" id="">
                        <i class="uil uil-bell"></i>
                        <span class="link-name">Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="./inquiry.php" id="">
                        <i class="uil uil-question"></i>
                        <span class="link-name">Inquiry</span>
                    </a>
                </li>
            </ul>

            <ul class="logout-mode">
                <li>
                    <a href="#" id="">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>

                <li>
                    <a href="#" id="">
                        <i class="uil uil-setting"></i>
                        <span class="link-name">Edit Profile</span>
                    </a>
                </li>

                <li class="mode">
                    <a href="#" id="" onclick="document.querySelector('.mode-toggle').click()">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>