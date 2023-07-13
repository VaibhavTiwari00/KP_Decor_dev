<?php include_once '../core/init.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Kp-Decor</title>

    <?php include_once '../global/head.php'; ?>
    <link rel="stylesheet" href="<?= get_css() ?>aboutus.css" />




</head>

<body>
    <header>


        <div class="header-about-img">

            <img src="<?= get_img() ?>about-us-img.jfif" alt="">
        </div>








        <!-- here header content -->
        <div class="full-header">

            <?php include_once '../global/header.php' ?>

            <!-- here first section of header  -->
            <!-- padding-right use for alignment  -->
            <section class="first-section-about">

                <div class="first-section-content-about">

                    <p>About Us</p>
                    <p><a href="<?= home_path() ?>">Home</a>
                        <span>/</span>

                        <a href="<?= home_path() ?>/aboutus">About Us</a>
                    </p>

                </div>

                <!-- this image is auto set in this div -->

            </section>
        </div>


    </header>




    </div>



    <!-- about us pae of the kp decor -->
    <!-- fisrt section foe the background image  -->
    <section class="first">

        <!-- second page of about us page -->
        <section class="white-pages">
            <div class="second-page-content">
                <img src="<?= get_img() ?>Group-94.png" />
                <div class="second-page-content-right">
                    <div class="yellow-kp-name">
                        <p>About KP Decor</p>
                    </div>
                    <p>KP DECOR</p>
                    <p>
                        Kp Decor is a sophisticated and stylish online supplier of home decor and leisure products. We want to curate a collection that you can use to decorate and accessorise your home to make it look its best. So get started on beautifying your room right away.
                        Wall Art, Candle Stands, Mirrors, Table Lamps, Aroma Diffusers, Scented Candles, Vases, Trays, Coasters, and other items are among our categories.
                        We endeavour to provide exceptional customer service to our clients by providing high-quality products, quick delivery, and a fair price. For this reason, we handpick the products that are sold on our website, and each one undergoes a thorough quality inspection before being added to the site.
                    </p>
                </div>
            </div>
            <!-- bottom bar of tje second page -->
            <div class="second-page-content-bottom">
                <div class="bottom">
                    <div class="bottom-no">
                        <p>16<span>+</span></p>
                    </div>
                    <div class="bottom-content">
                        <p>Years of<br> experience</p>
                    </div>
                </div>
                <div class="bottom">
                    <div class="bottom-no">
                        <p>4K<span>+</span></p>
                    </div>
                    <div class="bottom-content">
                        <p>Happy <br>Clients</p>
                    </div>
                </div>
                <div class="bottom bottom-third">
                    <div class="bottom-no">
                        <p>20<span>+</span></p>
                    </div>
                    <div class="bottom-content">
                        <p>Top Brands<br> We Deal With</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- third page of about us -->
        <section class="white-pages">
            <div class="fourth-page-content right-third-page">
                <div class="fourth-page-content-right right-third-page-content">
                    <div class="yellow-kp-name">
                        <p>About KP Decor</p>
                    </div>
                    <p>OUR APPROACH</p>
                    <p>
                        Creating your custom-tailored living space is a journey, and you should enjoy it. Every step of the process is enjoyable, whether it's talking about ideal areas, planning for building, or selecting the perfect piece.

                        Because we'll be on this journey together for a long time, choosing the correct interior design and remodelling partner for your project is crucial.



                        Our clients are enthusiastic about the work we perform for them.</p>
                </div>
                <img src="<?= get_img() ?>Group-93.png" />
            </div>
        </section>
        <!-- fourth page of about us -->
        <div class="first-section fouurth-page">
            <div class="our-content our-content-first">
                <p>Our Mission</p>
                <div class="under-div-line">

                </div>
                <div class="mission">
                    <p>
                        Our mission is to always be able to provide effective solutions to overcome challenges that come from time-to-time. We are on an incessant pursuit for excellence.
                    </p>
                </div>
            </div>
            <div class="our-content">
                <p>Our Vision</p>
                <div class="under-div-line">

                </div>
                <div class="mission">
                    <p>
                        VISION. Our purpose is to create spaces with "timeless designs" and to become a worldwide recognised professional interior design firm that specialises in high-end corporate, commercial, and residential interiors.
                    </p>
                </div>
            </div>
        </div>
        <!-- fifth page of about us-->
        <section class="white-pages fifth-page">
            <br>
            <p class="testimonials-heading">Testomonial</p>
            <div class="under-div-line">

            </div>
            <div class="testomonial-parts">
                <div class="testomonial">
                    <div>
                        <p>"Pleasantly surprised!!! <br> Will look great in my new home. A nice size and well made. I highly recommend. Thanks so much for doing great job!"</p>
                    </div>
                    <div class="testomonial-profile">
                        <div class="circle">
                            <img src="<?= get_img() ?>pexels-photo-2085739.jpeg" alt="">
                        </div>
                        <p>Manish Kumar</p>
                        <img src="<?= get_img() ?>icons8-get-quote-100.png" />
                    </div>
                </div>
                <div class="testomonial">
                    <div class="testimonials-para">
                        <p>"Just received and I am happy with this item. I got the pray circle and it matches perfectly with my farmhouse theme. Would purchases more if I had the wall space."</p>
                    </div>
                    <div class="testomonial-profile">
                        <div class="circle">
                            <img src="<?= get_img() ?>pexels-photo-937541.jpeg" alt="">
                        </div>
                        <p>Vanshika Sahu</p>
                        <img src="<?= get_img() ?>icons8-get-quote-100.png" />
                    </div>
                </div>
            </div>
            </div>
        </section>

        <?php

        include_once SCRIPT; ?>
        <?php include_once '../global/footer.php' ?>
        <?php include_once '../global/script.php' ?>
</body>

</html>