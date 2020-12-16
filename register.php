<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Glowbraids</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="registration-style.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-5">
                    <div class="top-header-content">
                        <p>Welcome to Glowbraids hair salon!</p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="top-header-content text-right">
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Sat: 8.00 to 17.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+233)-55-411-4850</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="akameNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php">GLOWBRAIDS</a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="purchase.php">Purchase</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li class="active"><a href="login.php">Join Us</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

<section>
    <div class="headerR bg-primary">
        <h2>Register</h2>
    </div>

    <form method="post" action="register.php" class="form-design">
        <?php include('errors.php'); ?>
        <div class="input-groupR">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-groupR">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-groupR">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-groupR">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-groupR">
            <button type="submit" class="btnR btn-primary" name="reg_user">Register</button>
        </div>
        <p>
            Already a member? <a href="login.php">Sign in</a>
        </p>
    </form><br>
</section>

<!-- Footer Area Start -->
<footer class="footer-area section-padding-80-0 bg-dark">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-footer-widget mb-80">
                    <!-- Footer Logo -->
                    <a href="#" class="footer-logo text-white font-weight-bold">GLOWBRAIDS</a>

                    <p class="mb-30 text-white">We would love to serve you and let you enjoy your culinary experience.</p>

                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p class="text-white">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title text-white font-weight-bold">Opening times</h4>

                    <!-- Open Times -->
                    <div class="open-time ">
                        <p class="text-white">Monday: Friday: 10.00 - 23.00</p>
                        <p class="text-white">Saturday: 10.00 - 19.00</p>
                    </div>

                    <!-- Social Info -->
                    <div class="social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-md-4 col-xl-3">
                <div class="single-footer-widget mb-80">

                    <!-- Widget Title -->
                    <h4 class="widget-title text-white font-weight-bold">Contact Us</h4>

                    <!-- Contact Address -->
                    <div class="contact-address">
                        <p class="text-white">Tel: (+233)-55-411-4850</p>
                        <p class="text-white">E-mail: asamuel355@yahoo.com</p>
                        <p class="text-white">Address: Kibi, Eastern Region, main st. Accra-Ghana</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- All JS Files -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Popper -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- All Plugins -->
<script src="js/akame.bundle.js"></script>
<!-- Active -->
<script src="js/default-assets/active.js"></script>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>