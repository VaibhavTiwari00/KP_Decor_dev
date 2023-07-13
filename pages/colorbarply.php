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
    <link rel="stylesheet" href="<?= get_css() ?>barply.css" />

</head>


<body>

    <!-- ///// header's    ///////// -->  
    <?php include '../global/header.php' ?>

    <!-- color choosing section here -->
    <div class="choose-info">
        <div class="choose-info-align">
            <div class="left-info">
                <p>Explore the various shades of laminates by</p>
                <p>simply selecting the any colour of your choice</p>
                <button>EXPLORE NOW</button>
            </div>

            <div class="right-info">
                <img src="<?= get_img()?>Rectangle 14.png" />
            </div>
        </div>
    </div>

    <!-- second colour combinations available section -->
    <section class="ply-colours">
        <p>Please choose a color to view collection</p>
        <div class="colour-container">
            <div class="colour-box">
                <div class="colour-1"></div>
                <p>Red</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-two"></div>
                <p>Orange</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-three"></div>
                <p>Yellow</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-four"></div>
                <p>Blue</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-five"></div>
                <p>Brown</p>
            </div>


            <div class="colour-box">
                <div class="colour-1 colour-six"></div>
                <p>White</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-seven"></div>
                <p>Grey</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-eight"></div>
                <p>Black</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-nine"></div>
                <p>Cream</p>
            </div>
            <div class="colour-box">
                <div class="colour-1 colour-ten"></div>
                <p>Pink</p>
            </div>
        </div>
    </section>

    <!-- footer embed here -->

    <?php include '../global/footer.php' ?>

</body>
</html>
