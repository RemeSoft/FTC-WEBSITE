<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT FTC - FENANTIAL TRANING COLLEGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .center__container {
            max-width: 1100px;
        }
    </style>

</head>

<body>

    <!-- REQUIRE HEADER  -->
    <?php include 'partials/header.php'; ?>
    
    <!-- REQUIRE BANNER  -->
    <?php 
        $banner__class = "";
        $banner__title = "Our Mission and Version";
        include 'partials/banner.php'; 
    ?>
    <!-- ---------------------------------------
                    BREADCRUMB START
    -------------------------------------->
    <div class="breadcrumb">
        <div class="center__container">
            <ul class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a class="breadcrumb:item__link" href="/">Home</a>
                </li>
                <li class="breadcrumb__item">
                    <a class="breadcrumb:item__link" href="/our_mission_vision.html">Mission & Vision</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ---------------------------------------
                   MAIN CONTENT START
    ---------------------------------------------->
    <main class="about">
        <div class="center__container">

        </div>
    </main>


    <!-- ---------------------------------------
                   MAIN CONTENT START
    ------------------------------------------------>
    <footer class="footer">
        <div class="center__container">
            <div class="footer__sections">

                <!-- SECTION ONE START  -->
                <div class="footer:section__one">
                    <div class="footer__logo">
                        <img class="footer:logo__image" src="./img/logo/sidbar-logo.png" alt="">
                    </div>
                    <div class="footer__icons">
                        <a class="footer:icon__link" href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a class="footer:icon__link" href=""><i class="fa-brands fa-instagram"></i></i></a>
                        <a class="footer:icon__link" href=""><i class="fa-brands fa-twitter"></i></a>
                        <a class="footer:icon__link" href=""><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- SECTION TWO START  -->
                <div class="footer:section__two">
                    <h4 class="footer__title">Quick Links</h4>
                    <ul class="footer:link__list">
                        <li class="footer:list__item">
                            <a class="footer:item__link" href="">Our Services</a>
                        </li>
                        <li class="footer:list__item">
                            <a class="footer:item__link" href="">Vission & Mission</a>
                        </li>
                        <li class="footer:list__item">
                            <a class="footer:item__link" href="">Universities</a>
                        </li>
                        <li class="footer:list__item">
                            <a class="footer:item__link" href="">Why choose FTC</a>
                        </li>
                    </ul>
                </div>

                <!-- SECTION THREE START  -->
                <div class="footer:section__three">
                    <h4 class="footer__title">Business Hours</h4>

                    <div class="footer:group__content">
                        <h5 class="footer__subtitle">Opening Day:</h5>
                        <p>Saturday - Wednesday: 11am to 8pm</p>
                        <p>Thursday: 11am to 6pm</p>
                    </div>
                    <div class="footer:group__content">
                        <h5 class="footer__subtitle">Vacation:</h5>
                        <p>All Fridays</p>
                        <p>All Public Holidays</p>
                    </div>
                </div>


                <div class="footer:section__four">
                    <h4 class="footer__title">Subscribe</h4>
                    <p>Enter your email and get latest updates and offers from FTC.</p>
                    <form class="footer__form" action="">
                        <input class="footer:form__input" type="email" placeholder="Enter your email">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <p>Copyright © FTC | All rights reserved | Signed by RemeSoft</p>
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>