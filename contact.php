<?php
include('./auth/auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!--W4N74L4-->

<head>
    <meta charset="utf-8">
    <title>Contact US</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Construction GPT Website">
    <meta name="keywords"
        content="Construction, GPT, Website, US, Henderson, Construction companies in US, Construction projects in US, Real Estate">
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
                        <h1>Contact Us</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="index.php">Main Page</a></li>
                            <li class="sep"></li>
                            <li>Contact Us</li>
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
                                <div class="padding30" style="border-radius: 10px;">
                                    <h3 style="color:white">Send Us Message
                                        <span class="tiny-border"></span>
                                    </h3>
                                    <form name="contactForm" id='contact_form' method="post" action="https://formspree.io/f/mgebvpej">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id='name_error' class='error'>Please enter your name.</div>
                                                <div>
                                                    <input type='text' name='name' id='name' class="form-control"
                                                        placeholder="Your Name">
                                                </div>
        
                                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                                <div>
                                                    <input type='text' name='email' id='email' class="form-control"
                                                        placeholder="Your Email">
                                                </div>
        
                                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                                <div>
                                                    <input type='text' name='phone' id='phone' class="form-control"
                                                        placeholder="Your Phone">
                                                </div>
        
                                                <div id='message_error' class='error'>Please enter your message.</div>
                                                <div>
                                                    <textarea name='message' id='message' class="form-control"
                                                        placeholder="Your Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div id='submit'>
                                                    <button type="submit" class="btn btn-success">Send</button>
                                                </div>
                                                <div id='mail_success' class='success'>Your message has been sent successfully.
                                                </div>
                                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your
                                                    message.</div>
                                            </div>
                                        </div>
                                    </form>
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
            'AppName',
        ]

        async function renderData() {
            const response = await fetch(api_url);
            var data = await response.json();
            console.log(data.data);

            if(data.data.length > 0) {
                for (let i = 0; i < list.length; i++) {
                    let result = data.data.filter((item) => item.ContextID === list[i]);
                    if(result) {
                        document.getElementById(list[i]).innerHTML = result[0].Context;
                    }
                }
            }
        }

        renderData();
    </script>
</body>

</html>