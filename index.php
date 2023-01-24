<?php
include('./auth/auth_session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Construction GPT Website</title>
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
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- section begin -->
            <section id="section-hero-2" class="full-height text-light relative" data-stellar-background-ratio=".2">
                <form class="chatgptform">
                    <textarea name="prompt" rows="1" cols="1" placeholder="Enter question or promt"></textarea>
                </form>
                <div>
                    <div class="chatgptmessage">
                        <div class="detail" id="first_question">
                            How do I estimate how many cubic yards of concrete I will need for a slab?
                        </div>
                    </div>
                    <div class="chatgptmessage">
                        <div class="detail" id="second_question">
                            Write a safety meeting check list for my construction company.
                        </div>
                    </div>
                    <div class="chatgptmessage">
                        <div class="detail" id="third_question">
                            What are the latest building codes and regulations for Clark County Nevada?
                        </div>
                    </div>
                    <div class="chatgptmessage">
                        <div class="detail" id="fourth_question">
                            How many homes were sold in the Unites States in 2006?
                        </div>
                    </div>
                    <div class="chatgptmessage">
                        <div class="detail" id="fifth_question">
                            Write an email to a framing contractor from a lumber supplier asking for an opportunity to bid their upcoming projects
                        </div>
                    </div>
                </div>


            </section>
            <!-- section close -->
        </div>
    </div>
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
    <script src="js/slide.js"></script>
    <script>
        const api_url = "http://localhost:8000/";
        const list = [
            'first_question',
            'second_question',
            'third_question',
            'fourth_question',
            'fifth_question'
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