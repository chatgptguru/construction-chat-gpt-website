<!DOCTYPE html>
<html lang="en">

<!--W4N74L4-->

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Construction GPT Website">
    <meta name="keywords" content="Construction, GPT, Website, US, Henderson, Construction companies in US, Construction projects in US, Real Estate">
    <meta name="author" content="Arsen Pashko">


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="demo/demo.css" type="text/css">
    <link rel="icon" type="image/png/icon" href="images/background/logo.png" alt="Icon">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
</head>

<body id="homepage">

    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="logo">
                            <a href="index.php">
                                <img class="logo_image" src="images/background/logo.png" alt="construct logo">
                            </a>
                        </div>
                        <span id="menu-btn"></span>

                        <nav>
                            <ul id="mainmenu">
                                <li>
                                    <a href="index.php">Main Page</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php">LogIn</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>

        <!-- subheader -->
        <section id="subheader" data-stellar-background-ratio=".3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Register</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="index.php">Main Page</a></li>
                            <li class="sep"></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-bottom">
            <div class="container">
                <?php
                    require('./db/db.php');
                    if (isset($_REQUEST['username'])) {
                    // removes backslashes
                        $username = stripslashes($_REQUEST['username']);
                        //escapes special characters in a string
                        $username = mysqli_real_escape_string($con, $username);
                        $email    = stripslashes($_REQUEST['email']);
                        $email    = mysqli_real_escape_string($con, $email);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($con, $password);
                        $create_datetime = date("Y-m-d H:i:s");

                        $query    = "SELECT * FROM `users` WHERE username='$username'";
                        $fetch_result = mysqli_query($con, $query) or die(mysql_error());
                        $rows = mysqli_num_rows($fetch_result);
                        if($rows >= 1) {
                            echo "<div class='form'>
                            <h3 style='color:white; text-align: center'>Account Registered with current userName.</h3><br/>
                            <p class='link'><a href='registration.php'>Click here to registration again.</a></p>
                                </div>";
                            return;
                        };
                        $query    = "INSERT into `users` (username, password, email, create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
                        $result   = mysqli_query($con, $query);
                        if ($result) {
                            echo "<div class='form'>
                            <h3 style='color:white; text-align: center'>You are registered successfully.</h3><br/>
                                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                                </div>";
                        } else {
                                        echo "<div class='form'>
                                <h3 style='color:white; text-align: center'>Required fields are missing.</h3><br/>
                                <p class='link'><a href='registration.php'>Click here to registration again.</a></p>
                            </div>";
                        }
                    } else {
                    ?>
                        <form class="form" action="" method="post">
                            <h1 class="login-title">Registration</h1>
                            <input type="text" class="login-input" name="username" placeholder="Username" required />
                            <input type="text" class="login-input" name="email" placeholder="Email Adress">
                            <input type="password" class="login-input" name="password" placeholder="Password">
                            <input type="submit" name="submit" value="Register" class="login-button">
                            <p class="link">Already have an account? <a href="login.php">Login here</a></p>
                        </form>
                    <?php
                    }
                    ?>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget widget_recent_post">
                            <h3>Terms</h3>
                            <ul>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Dislamier</a></li>
                                <span>Skyview Solutions LLC</span>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span>Henderson, United States</span>
                                <span><strong>Email:</strong><a href="mailto:contact@constructgpt.com">contact@constructgpt.com</a></span>
                                <span><strong>Web:</strong><a href="https://www.constructionGPT.com">https://constructgpt.com</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; All Rights Reserved. Copyright 2023
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                <a href="https://wa.me/"><i class="fa fa-whatsapp"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript Files
    ================================================== -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jpreLoader.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/easing.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.countTo.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/enquire.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/designesia.js"></script>
        <script src="demo/demo.js"></script>
</body>

</html>