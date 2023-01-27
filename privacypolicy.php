<?php
include('./auth/auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">

<!--W4N74L4-->

<head>
    <meta charset="utf-8">
    <title>Privacy policy</title>
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
                                    if (isset($_SESSION["username"])) {
                                        echo ("<a href='./auth/logout.php'>Log out</a>");
                                    } else {
                                        echo ("<a href='./login.php'>Log In</a>");
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
                        <h1>Privacy policy</h1>
                        <div class="small-border-deco"><span></span></div>
                        <ul class="crumb">
                            <li><a href="index.php">Main Page</a></li>
                            <li class="sep"></li>
                            <li>Privacy policy</li>
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
                                                <li class="special_point" id="privacy_introduction">Introduction</li>
                                                <li id="privacy_introduction_content">This Privacy Policy explains how Skyview Solutions LLC ("we," "us," or "our") collects, uses, shares, and protects information that we obtain from users of our website (the "Site") and our chatbot service (the "Service").By using the Site or Service, you consent to the data practices described in this Privacy Policy.</li>
                                                <li class="special_point" id="privacy_information_we_collect">Information We Collect</li>
                                                <li id="privacy_information_we_collect_content">We may collect the following types of information from users of the Site and Service:
                                                    Personal information, such as name, email address, and phone number, when you voluntarily provide it to us through forms on the Site or through the Service.
                                                    Usage information, such as your chatbot interactions and history, which we collect automatically as you use the Service.
                                                    Cookies, which are small data files stored on your device by your web browser, to remember your preferences and to understand how you use the Site and Service.</li>
                                                <li class="special_point" id="privacy_use_of_information">Use of Information</li>
                                                <li id="privacy_use_of_information_content">We may use the information we collect for the following purposes:
                                                    To provide and improve the Site and Service, including to personalize your experience and to respond to your requests for assistance.
                                                    To communicate with you, such as to provide updates on the Service or to respond to your inquiries.
                                                    For analytics and research purposes, to understand how users interact with the Site and Service, and to improve our products.
                                                    To comply with legal obligations, such as to respond to legal requests or to prevent fraud or other criminal activity.</li>
                                                <li class="special_point" id="privacy_sharing_information">Sharing of Information</li>
                                                <li id="privacy_sharing_information_content">We may share your information with the following third parties:
                                                    Service providers, such as hosting providers or analytics providers, who assist us in operating the Site and Service.
                                                    As required by law, such as to comply with a subpoena or other legal process.
                                                    In the event of a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred as part of that transaction.</li>
                                                <li class="special_point" id="privacy_protection_information">Protection of Information</li>
                                                <li id="privacy_protection_information_content">We take reasonable measures to protect the information we collect from unauthorized access, use, disclosure, alteration, or destruction. However, please note that no method of transmitting or storing data is completely secure, and we cannot guarantee the security of your information.</li>
                                                <li class="special_point" id="privacy_your_rights">Your Rights</li>
                                                <li id="privacy_your_rights_content">
                                                    You have the right to request access to and rectification or erasure of your personal information, and to request that we limit the processing of your information. Additionally, you have the right to object to the processing of your information, and to request that your information be provided to you in a portable format. To exercise these rights, please contact us at contact@constructgpt.com
                                                </li>
                                                <li class="special_point" id="privacy_changes_to_policy">Changes to the Privacy Policy</li>
                                                <li id="privacy_changes_to_policy_content">We may make changes to this Privacy Policy from time to time. Your continued use of the Site and Service following any changes to this Privacy Policy will be deemed your acceptance of those changes.</li>
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
        <script>
            const api_url = "http://localhost:8000/";
            const list = [
                'privacy_introduction',
                'privacy_introduction_content',
                'privacy_information_we_collect',
                'privacy_information_we_collect_content',
                'privacy_use_of_information',
                'privacy_use_of_information_content',
                'privacy_sharing_information',
                'privacy_sharing_information_content',
                'privacy_protection_information',
                'privacy_protection_information_content',
                'privacy_your_rights',
                'privacy_your_rights_content',
                'privacy_changes_to_policy',
                'privacy_changes_to_policy_content',
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