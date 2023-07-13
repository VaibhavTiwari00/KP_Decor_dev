            <?php include_once '../core/init.php'; ?>
            
            <section class="nav-header">

                <div class="logo-img">
                    <img onclick="window.location.href='<?php echo home_path() ?>'" src="<?= get_img() ?>white_logo1.png">
                </div>


                <div class="menu-navbar" id="menu-navbar">
                    <ul>
                        <li>
                            <a href="<?= home_path() ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= home_path() ?>/aboutus">About Us</a>
                        </li>
                        <li>
                            <a href="<?= home_path() ?>/product"> Product</a>

                        </li>

                        <li>
                            <a href="<?= home_path() ?>/contactus">Contact Us</a>
                        </li>
                        <li>
                            <div class="nav-tripple-line" >
                                <div class="line-001">

                                </div>
                                <div class="line-002">

                                </div>
                                <div class="line-003">

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- only visible for mobile view -->
                
                <div class="hamburger" id="hamburger" onclick="myfun()">


                  <i onclick="myfun()" class="fas fa-bars"></i>

                </div>
                <div class="hamburger-cross" id="hamburger-cross" onclick="myfunn()">


                  <i class="fas fa-times"></i>

                </div>

            </section>