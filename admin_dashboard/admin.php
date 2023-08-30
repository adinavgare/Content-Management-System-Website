<?php
session_start();
if (!isset($_SESSION['AdminLoginId'])) {
    header("location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="script.js"></script>
    <title>Admin Dashboard</title>
    <link rel="icon" href="admin_dash_BrowserLogo.png" type="image/x-icon">

</head>

<body>
    <div class="container-main">
    <input type="checkbox" id="menu-bar">
        <div class="nav-items">
            <div class="logo-name">
                <img src="gt_logo.jpg" alt="GlobalSoft Logo" width="65px" height="50px">
                <h1>
                    GlobalSoft Technology
                </h1>
            </div>

            <ul>
                <hr>
                <li class="academics"><a>Home &#x25BE;</a>
                    <ul class="dropdown ">

                        <li onclick="loadPage('display.php')"><a>Menu</a></li>
                        <li onclick="loadPage('submenu_display.php')"><a>Submenu</a></li>
                        <li onclick="loadPage('slider_home_display.php')"><a>Slider</a></li>
                        <li onclick="loadPage('clients_home_display.php')"><a>Clients</a></li>
                    </ul>
                </li>
                <!-- <hr> -->
                <!-- <li class="academics"><a>About Us </a>
                </li> -->
                <hr>
                <li class="academics" onclick="loadPage('solution_home_display.php')"><a>Solution </a>
                </li>
                <hr>
                <li class="academics" onclick="loadPage('services_home_display.php')"><a>Sevices</a>
                </li>
                <hr>
                <li class="academics" onclick="loadPage('careers_home_display.php')"><a>Careers</a>
                </li>
                <hr>
                <li class="academics"><a>Contact Us</a>
                </li>
                <hr>
                <li class="academics" onclick="loadPage('blog_home_display.php')"><a>Blog</a>
                </li>
                <hr> <br> <br> 
                <li class="academics">
                    <form action="admin_login.php" method="post">
                        <button type="submit" name="Logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="container2">
            <div class="navbar">
                <span label for="menu-bar" class="hamburger">&#9776; Dashboard </span>
                <span class="nav2">
                    <form class="search-form">
                        <input type="text" placeholder="Search..." class="search-input">
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </span>
                <span class="nav3">
                    <i class="fa fa-fw fa-user"></i>
                    <?php echo $_SESSION['AdminLoginId']; ?>
                    <img src="admin_loginLogo.png" alt="Admin Login Image" class="logo" width="30px" height="25px">

                </span>

            </div>
            <div class="main">
                <div id="content"></div>
            </div>
        </div>
    </div>
    <!-- <footer>
        <p> ©2023 GlobalSoft. All Rights Reserved.&#160;&#160;&#160;&#160; Terms & Conditions | Privacy Policy
        </p>
    </footer> -->
</body>

</html>