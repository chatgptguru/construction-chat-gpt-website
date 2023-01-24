<?php
include('./auth/auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!--W4N74L4-->

<head>
    <meta charset="utf-8">
    <title>Terms Of Use</title>
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
                        <h1>Terms Of Use</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="index.php">Main Page</a></li>
                            <li class="sep"></li>
                            <li>Terms Of Use</li>
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
                                                <li class="special_point" id="terms_introduction">Introduction</li>
                                                <li id="terms_introduction_content">
                                                    These Terms Of Use (the "Terms") govern your use of the chatbot service provided by Skyview Solutions LLC] (the "Service") on our website.
                                                    By using the Service, you agree to be bound by these Terms. If you do not agree to these Terms, you may not use the Service.</li>
                                                <li class="special_point" id="terms_useofservice">
                                                    Use of the Service</li>
                                                <li id="terms_useofservice_content">
                                                    The Service is provided for your personal, non-commercial use only.
                                                    You may not use the Service for any illegal or unauthorized purpose.
                                                    You must not, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).</li>
                                                <li class="special_point" id="terms_property_rights">
                                                    Proprietary Rights</li>
                                                <li id="terms_property_rights_content">
                                                    The Service and all content and software associated with the Service, including chatbot technology (such as GPT-3), are proprietary to Skyview Solutions LLC and/or its licensors and protected by copyright, trademark, and other intellectual property laws.
                                                    You may not copy, modify, distribute, sell, or transfer any portion of the Service or its associated content or software without the express written consent of Skyview Solutions LLC.</li>
                                                <li class="special_point" id="terms_warranties">
                                                    Disclaimer of Warranties</li>
                                                <li id="terms_warranties_content">
                                                    The Service is provided on an "as is" and "as available" basis.
                                                    Skyview Solutions LLC makes no representations or warranties of any kind, express or implied, as to the operation of the Service or the information, content, materials, or products included on the Service.</li>
                                                <li class="special_point" id="terms_liability">
                                                    Limitation of Liability</li>
                                                <li id="terms_liability_content">
                                                    In no event shall Skyview Solutions LLC be liable for any damages whatsoever, including but not limited to any direct, indirect, special, incidental, or consequential damages, arising out of or in connection with the use or inability to use the Service or any content or software associated with the Service.</li>
                                                <li class="special_point" id="terms_indemnification">
                                                    Indemnification</li>
                                                <li id="terms_indemnification_content">
                                                    You agree to indemnify and hold Skyview Solutions LLC and its affiliates, officers, agents, and employees harmless from any claim or demand, including reasonable attorneys' fees, made by any third party due to or arising out of your use of the Service, your violation of these Terms, or your violation of any rights of another.</li>
                                                <li class="special_point" id="terms_changestoterms">
                                                    Changes to the Terms</li>
                                                <li id="terms_changestoterms_content">
                                                    Skyview Solutions LLC reserves the right to make changes to these Terms at any time.
                                                    Your continued use of the Service following any changes to these Terms will be deemed your acceptance of those changes.
                                                </li>
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
                'terms_introduction',
                'terms_introduction_content',
                'terms_useofservice',
                'terms_useofservice_content',
                'terms_property_rights',
                'terms_property_rights_content',
                'terms_warranties',
                'terms_warranties_content',
                'terms_liability',
                'terms_liability_content',
                'terms_indemnification',
                'terms_indemnification_content',
                'terms_changestoterms',
                'terms_changestoterms_content'
            ]

            async function renderData() {
                const response = await fetch(api_url);
                var data = await response.json();

                if (data.data.length > 0) {
                    for (let i = 0; i < list.length; i++) {
                        let result = data.data.filter((item) => item.ContextID === list[i]);
                        console.log(result);
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