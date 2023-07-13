<?php

include_once '../core/init.php';
include_once '../includes/db.inc.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Page</title>

    <!-- //////   php head include here   ////// -->

    <?php include '../global/head.php';    ?>

    <!-- css link here -->
    <link rel="stylesheet" href="<?= get_css() ?>products.css" />



</head>

<body>

    <!-- header embed here -->

    <header>


        <div class="header-about-img">

            <img src="<?= get_img() ?>111-2.png" alt="">
        </div>








        <!-- here header content -->
        <div class="full-header">

            <?php include_once '../global/header.php' ?>

            <!-- here first section of header  -->
            <!-- padding-right use for alignment  -->
            <section class="first-section-product">


                <div class="first-section-content-product">
                    <p>Our Products</p>
                    <p><a class="p_link" href="<?= home_path() ?>">Home</a>
                        <span>/</span> <a class="p_link" href="<?= home_path() ?>/product">Our Products</a>
                    </p>
                </div>

                <!-- this image is auto set in this div -->


            </section>
        </div>


    </header>



    <div class="product">
        <div class="product-heading">
            <p>Our Best Selling Product</p>
        </div>

        <!-- product link  -->

        <div class="product-links">
            <ul>
                <li><a href="#">All</a></li>
                <li><a href="#">Interior</a></li>
                <li><a href="#">Extriror</a></li>
                <li><a href="#">Floor Plan </a></li>
                <li><a href="#"> Product</a></li>


            </ul>
        </div>
    </div>


    <!-- product boxes and images  -->

    <div class="prot-data">

        <div class="main-box">
            <img src="<?= get_img() ?>laminates.jpg" alt="" class="prod-img">
            <p>Interior</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>michael-warf-f8egRYt5RGk-unsplash.jpg" alt="" class="prod-img">
            <p> Exterior</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>door-2.jpg" alt="" class="prod-img">
            <p> Floor Plan</p>
        </div>



        <div class="main-box">
            <img src="<?= get_img() ?>doors.jpg" alt="" class="prod-img">
            <p>Interior</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>pexels-photo-10827348.jpeg" alt="" class="prod-img">
            <p>Floor Plan</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>/pexels-medhat-ayad-447592.jpg" alt="" class="prod-img">
            <p> Exterior</p>
        </div>



        <div class="main-box">
            <img src="<?= get_img() ?>wpc.jpg" alt="" class="prod-img">
            <p>Interior</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>plywood.jpg" alt="" class="prod-img">
            <p>Floor Plan</p>
        </div>


        <div class="main-box">
            <img src="<?= get_img() ?>pexels-houzlook-com-3356416.jpg" alt="" class="prod-img">
            <p>Exterior</p>
        </div>

    </div>


    <!-- footer add here --><?php

                            include_once SCRIPT; ?>

    <?php include '../global/footer.php' ?>

</body>

</html>