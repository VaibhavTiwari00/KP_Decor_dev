<?php

include_once '../core/init.php';
include_once '../includes/db.inc.php';


?>

<html>

<head>
    <title>Kp Decor</title>

    <!-- //////   php head include here   ////// -->

    <?php include '../global/head.php';    ?>

    <!-- ////  Css link Here   ////-->
    <link rel="stylesheet" href="<?= get_css() ?>home.css" />
    <link rel="stylesheet" href="<?= get_css() ?>contactus.css" />


</head>


<body>

    <!-- ///// header's    ///////// -->
    <header>


        <div class="header-about-img">

            <img src="<?= get_img() ?>contact-us-bg-img.jfif" alt="">
        </div>

        <!-- here header content -->
        <div class="full-header">

            <?php include_once '../global/header.php' ?>

            <!-- here first section of header  -->
            <!-- padding-right use for alignment  -->
            <section class="first-section-about">


                <div class="first-section-content-contact">

                    <p class="page_name">Contact Us</p>
                    <p><a class="page_link" href="<?= home_path() ?>">Home</a>
                        <span>/</span><a class="page_link" href="<?= home_path() ?>/contactus">Contact Us</a>
                    </p>


                </div>

                <!-- this image is auto set in this div -->


            </section>
        </div>


    </header>

    <!-- vaibhav coding here -->

    <!-- here contact section start  -->

    <section class="contactus-main-section" id="contact-us">
        <p class="contact-head">Contact Us</p>

        <!-- 3 upper vboxes start   -->
        <div class="contact-box">
            <div class="boxes">
                <div class="icons-contact">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="sub-part-boxes">
                    <p>Phone Number</p>
                    <a href="tel:9839625577">+91 9839625577</a>
                </div>
            </div>
            <div class="boxes">
                <div class="icons-contact">
                    <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="sub-part-boxes">
                    <p>Email Address</p>
                    <a href="mailto:info@kpdecor.in">Info@kpdecor.in</a>
                </div>

            </div>
            <div class=" boxes">
                <div class="icons-contact">
                    <i class="fas fa-search-location"></i>
                </div>
                <div class="sub-part-boxes">
                    <p>Office Location</p>
                    <a href="#"> 107/3 GT RoadJareeb Chowki</a><br>
                    <a href="#"> Crossing, Kanpur , 208003</a><br>

                </div>
            </div>

        </div>


        <!-- 2 uper boxes  -->

        <div class="contact-2-box">
            <div class="boxes">
                <div class="icons-contact">
                    <img src="<?= get_img() ?>cons8-instagram-48.png" alt="">
                </div>
                <div class="sub-part-boxes">
                    <p>Instagram</p>
                    <a href="tel:9839625577">instagram.com/kpdecorindia</a>
                </div>
            </div>
            <div class="boxes">
                <div class="icons-contact">
                    <img src="<?= get_img() ?>cons8-facebook-60.png" alt="">
                </div>
                <div class="sub-part-boxes">
                    <p>Faceboook</p>
                    <a href="tel:9839625577">facebook.com/kpdecorindia</a>
                </div>
            </div>
        </div>








    </section>
    <div class="sixth-section" id="contact-us">

        <div class="sixth-section-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14357.858064703225!2d80.32174334277956!3d26.4631780894542!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6b80e4b03ff45c5!2sKP%20Decor!5e0!3m2!1sen!2sin!4v1645511331209!5m2!1sen!2sin" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="sixth-section-form">
            <p>Request A Quote</p>
            <div class="name-mail">
                <input type="name" placeholder="Name">
                <input type="mail" placeholder="Email">
            </div>
            <textarea name="" id="" cols="30" rows="5" placeholder="Type Your Message Here......."></textarea>
            <button>Contact Us</button>
        </div>

    </div>

    <!-- footer embed here --> <?php

                                include_once SCRIPT; ?>

    <?php include_once '../global/footer.php' ?>

</body>

</html>