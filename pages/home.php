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


</head>

<body>

    <!-- here full header with scrolling images -->
    <header>
        <div class="icons">
            <div class="insta">
                <a href="https://www.instagram.com/kpdecorindia/"><img src="<?= get_img() ?>cons8-instagram-48.png" alt=""></a>
            </div>
            <div class="face">
                <a href="https://www.facebook.com/kpdecorindia"> <img src="<?= get_img() ?>cons8-facebook-60.png" alt=""></a>
            </div>
            <div class="call">
                <a href="https://api.whatsapp.com/send?phone=919839625577"><img src="<?= get_img() ?>cons8-whatsapp-48.png" alt=""></a>

            </div>
        </div>

        <div class="header-img">

            <div class="slide">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">



                <div class="st first">
                    <img src="<?= get_img() ?>empty-flat-interrior-with-elements-decoration-(1).jpg" alt="">
                </div>
                <div class="st">
                    <img src="<?= get_img() ?>indoors-3101776_1920.jpg" alt="">
                </div>
                <div class="st">
                    <img src="<?= get_img() ?>empty-flat-interrior-with-elements-decoration-(1).jpg" alt="">
                </div>
                <div class="st">
                    <img src="<?= get_img() ?>indoors-3101776_1920.jpg" alt="">
                </div>
                <div class="st">
                    <img src="<?= get_img() ?>empty-flat-interrior-with-elements-decoration-(1).jpg" alt="">
                </div>


                <div class="nav-auto">
                    <div class="a-b1"></div>
                    <div class="a-b2"></div>
                    <div class="a-b3"></div>
                    <div class="a-b4"></div>
                    <div class="a-b5"></div>
                </div>

            </div>

            <div class="nav-m">
                <lable for="radio1" class="m-btn"></lable>
                <lable for="radio1" class="m-btn"></lable>
                <lable for="radio1" class="m-btn"></lable>
                <lable for="radio1" class="m-btn"></lable>
                <lable for="radio1" class="m-btn"></lable>
            </div>


            <!-- here is fullscreen images  -->

            <!-- <img src="<?= get_img() ?>empty-flat-interrior-with-elements-decoration.jpg" alt=""> -->
            <!-- <div class="st">
                <img src="<?= get_img() ?>iindoors-3101776_1920-1.png" alt="">
            </div> -->

        </div>


        <!-- here header content -->
        <div class="full-header">

            <!-- in header logo and menu  -->
            <!-- height in px -->
            <?php include_once '../global/header.php' ?>

            <!-- here first section of header  -->
            <!-- padding-right use for alignment  -->
            <section class="first-section">


                <div class="first-section-content">

                    <p>Where </p>
                    <p>Dimension Take</p>
                    <p>Shape</p>


                </div>

                <!-- this image is auto set in this div -->


            </section>
        </div>


    </header>
    <!-- here second section of home page  -->



    <!-- first div of home page  -->

    <div class="second-div">

        <div class="second-div-content">
            <p>KP DECOR</p>
            <p>MAKE YOUR HOME EXQUISITE</p>
            <p>We give you a million of reasons to choose us as your interior
                designing partner! The optimum quality of products, prices that
                fit your budget, the look that ravishes your visitors, and the
                guarantees with which you can invest with us, all is offered interactively
                to you and hundreds of architects across the globe.­ </p>
            <div class="button-second-section">
                <a href="<?= home_path() ?>/aboutus">More</a>
                <a href="<?= home_path() ?>/contactus">Contact Us</a>
            </div>
            <div class="left-arrow-0">

            </div>
            <div class="right-arrow-0">

            </div>
        </div>

    </div>


    <!-- here we start section 1 of home page  -->
    <!-- in this section we have two part image or content both have scrolling -->
    <section class="third-section">

        <!-- this is image section  -->
        <!-- left -->
        <div class="third-section-img">

            <!-- this div is relative for (bg-img-absolute-slider) -->
            <!-- here image is in background -->
            <div class="bg-img-relative">

                <!-- here two image used for scrolling -->
                <div class="bg-img-absolute-slider">
                    <img src="<?= get_img() ?>ply-frnt.jpg" alt="">
                    <!-- <img src="<?= get_img() ?>plywood2.jpg" alt=""> -->

                </div>

            </div>
            <div class="third-section-bg-ph">
                <img src="<?= get_img() ?>Image00.png" alt="">

                <div class="bg-img-absolute-slider-ph">

                    <img src="<?= get_img() ?>ply-frnt.jpg" alt="">
                    <img src="<?= get_img() ?>plywood2.jpg" alt="">

                </div>

            </div>

        </div>

        <!-- this is content section  -->
        <!-- right -->
        <div class="third-section-content">
            <p class="brand-name">PRODUCT RANGE</p>
            <div class="line-div line-div-product">

            </div>

            <!-- <div class="line-div-heading"></div> -->

            <p class="product-range">OUR TOP PRODUCTS</p>

            <p>We offer a wide array of products to cater to distinct function needs. All solutions are created using high quality material sourced exclusively to deliver perfection.</p>

            <!-- content section also have scroll  -->
            <!-- grid -->
            <div class="grid-slide">

                <div class="left-arrow">
                    <i class="fas fa-chevron-left arrow-slider"></i>
                </div>

                <!-- this div divided by grid nd here overflow is auto -->
                <div class="center-grid-slider">

                    <div class="center-grid-slider-img">
                        <img src="<?= get_img() ?>pr-2.jpg" alt="">
                        <p>Interior</p>
                    </div>

                    <div class="center-grid-slider-img">
                        <img src="<?= get_img() ?>p-5.jpg" alt="">
                        <p>Laminates</p>
                    </div>


                    <div class="center-grid-slider-img">
                        <img src="<?= get_img() ?>p-1.jpg" alt="">
                        <p>Ply Boards</p>
                    </div>


                    <div class="center-grid-slider-img">
                        <img src="<?= get_img() ?>pr-4.jpg" alt="">
                        <p>Door</p>
                    </div>

                </div>


                <div class="right-arrow">
                    <i class="fas fa-chevron-right arrow-slider"></i>
                </div>

            </div>
        </div>

    </section>
    <section class="second-section">

        <!-- dividation same as first section by grid padding right also used -->
        <div class="second-section-content">

            <h6>KNOW MORE</h6>
            <div class="line-div">

            </div>

            <h4>ABOUT OUR COMPANY</h4>

            <p>KP Decor is a leading name when it comes to bringing of for every need and space. Kp decor Laminates has established a high standard of excellence in the interior design business. It provides some of India's highest-quality compact, and long-lasting laminates are durable and adaptable materials with limitless design possibilities
            </p>
            <p>It does, however, have a backdrop that isn't visible. We strive to innovate not just how laminates are seen but also how they look. We attempt to offer laminates a total makeover like never before by using lively colours and finishes. </p>



            <!-- <div class="button-second-section">
                <button>More</button>
                <button>Contact US</button>
            </div> -->

        </div>

        <!-- this image is also auto set in this div -->
        <div class="second-section-img">
            <img src="<?= get_img() ?>header image.png">
        </div>

    </section>


    <!-- here is section 4 -->
    <section class="fourth-section">
        <p>Brands Name</p>

        <div class="brand-slider-parent">'
            <div class="brand-slider" id="brand-slider">
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>meraki-150x150.jpg
              " alt="">

                </div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>formica-150x150.jpg" alt=""></div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>centuryply-plywood-500x500-1-150x150.jpg" alt=""></div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>advancelam-logo.png" alt=""></div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>glo-150x150.jpg" alt=""></div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>tesla-150x150.jpg" alt=""></div>
                <div class="brand-1" id="brand-img"><img src="<?= get_img() ?>virgo-150x150.jpg" alt=""></div>

            </div>
        </div>
    </section>

    <!-- certification section -->
    <section class="fifth-section">


        <div class="fifth-section-testimonals">
            <p>TESTIMONIALS</p>

            <div class="line-div">

            </div>
            <div class="fifth-section-testimonals-cmt">

                <div class="fifth-section-testimonals-cmt-profile">
                    <img src="<?= get_img() ?>Rectangle 105.png" alt="">
                </div>
                <div class="fifth-section-testimonals-cmt-review">

                    <img src="<?= get_img() ?>icons8-quote-left-30 (1).png" alt="">
                    <p>
                        From their wide variety of products to
                        their unmatched quality, Kpdecor has bowled us
                        over several times with their flawless services.
                        When it comes to buying Kapdecor products,
                        you can trust blindly.
                    </p>

                </div>

            </div>

        </div>

        <div class="fifth-section-post">
            <p>LATEST POST</p>

            <div class="line-div"></div>

            <div class="fifth-section-testimonals-cmt">

                <div class="fifth-section-testimonals-cmt-profile postt-img">
                    <img src="<?= get_img() ?>Rectangle 108.png" alt="">
                </div>
                <div class="fifth-section-testimonals-cmt-review">

                    <img src="<?= get_img() ?>icons8-quote-left-30 (1).png" alt="">
                    <p>
                        <b> Endless Design Choice for interior decor </b> <br>
                        Using premium quality kpdecor to improve the look of your home is both cost
                        effective and eco-friendly. Enhance any
                        space by employing the functionality of exotic wood veneers.
                    </p>

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

    <?php
    include_once FOOTER;
    include_once SCRIPT; ?>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
        (function() {
            var imgLen = document.getElementById('brand-slider');
            var images = imgLen.getElementsByTagName('brand-img');
            var counter = 1;

            if (counter <= images.length) {
                setInterval(function() {
                    images[0].src = images[counter].src;
                    console.log(images[counter].src);
                    counter++;

                    if (counter === images.length) {
                        counter = 1;
                    }
                }, 2000);
            }
        })();
    </script>


    <!--  Here end kP Decor -->

    <script src="https://cdn.jsdelivr.net/npm/flatpickr">


    </script>


</body>

</html>