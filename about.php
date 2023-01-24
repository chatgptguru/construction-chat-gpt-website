<?php
include('./auth/auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!--W4N74L4-->

<head>
    <meta charset="utf-8">
    <title>About US</title>
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
                                <li>
                                    <?php 
                                        if(isset($_SESSION["username"])) {
                                            echo("<a href='./auth/logout.php'>Log out</a>");
                                        } else {
                                            echo("<a href='./login.php'>Log In</a>");
                                        }
                                    ?>
                                </li>
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
                        <h1>About Us</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="index.php">Main Page</a></li>
                            <li class="sep"></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content" class="no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="padding30 mb30" style="border-radius: 10px;">
                                    <div class="box-icon-simple left">
                                        <div class="text">
                                            <ul class="page_content_ul">
                                                <li id="about_us_context_1">Welcome to ConstructGPT where innovation and expertise come together to meet the needs of construction professionals.</li>
                                                <li id="about_us_context_2">Our team is composed of industry veterans with over 20 years of experience working with builders, suppliers, contractors, engineers, and architects.</li>
                                                <li id="about_us_context_3">With a deep understanding of the unique challenges facing the construction industry, we have a history of using cutting-edge technology to solve real-world problems.</li>
                                                <li id="about_us_context_4">At ConstructGPT we leverage the power of AI and natural language processing to provide our clients with the most accurate and up-to-date information in the industry.</li>
                                                <li id="about_us_context_5"> Our chatbot, powered by ChatGPT, offers instant access to an extensive knowledge base, making it easy for construction professionals to find the answers they need, when they need them.
                                                </li>
                                                <li id="about_us_context_6">Whether you're a contractor looking for the trade specific information , an architect in search of inspiration, or a supplier trying to stay ahead of the competition, our website is the go-to resource for construction professionals.</li>
                                                <li id="about_us_context_7">We are dedicated to providing our users with the tools and information they need to succeed in this ever-changing industry.</li>
                                                <li id="about_us_context_8">Thank you for choosing ConstructGPT. We are a team of experts committed to delivering innovative solutions.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="widget widget_recent_post">
                            <h3>Terms</h3>
                            <ul>
                                <li><a href="termsofuse.php">Terms Of Use</a></li>
                                <li><a href="privacypolicy.php">Privacy Policy</a></li>
                                <li><a href="dislamier.php">Dislamier</a></li>
                                <span>Skyview Solutions LLC</span>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span>Henderson, United States</span>
                                <span><strong>Phone:</strong>+123 456 789 0</span>
                                <span><strong>Email:</strong><a href="mailto:info@constructionGPT.com">info@constructionGPT.com</a></span>
                                <span><strong>Web:</strong><a href="https://www.constructionGPT.com">https://constructionGPT.com</a></span>
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

        <script>
            const api_url = "http://localhost:8000/";
            const list = [
                'about_us_context_1',
                'about_us_context_2',
                'about_us_context_3',
                'about_us_context_4',
                'about_us_context_5',
                'about_us_context_6',
                'about_us_context_7',
                'about_us_context_8'
            ]

            async function renderData() {
                const response = await fetch(api_url);
                var data = await response.json();
                console.log(data.data);

                if (data.data.length > 0) {
                    for (let i = 0; i < list.length; i++) {
                        let result = data.data.filter((item) => item.ContextID === list[i]);
                        if (result) {
                            document.getElementById(list[i]).innerHTML = result[0].Context;
                        }
                    }
                }
            }

            renderData();
        </script>
</body>

</html>