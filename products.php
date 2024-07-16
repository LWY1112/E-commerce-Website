<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
		<title>Products</title>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of products page-->
        <title>Products | DigitalDen</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1 style="text-align: center;">Welcome to our IT Store!</h1>
                <p style="text-align: center;">We have the best laptops, mice and keyboards for you. No need to hunt around, we have all in one place.</p>
            </div>
            <hr>

            <div class="row text-center" id="laptop">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
						<img src="https://dlcdnwebimgs.asus.com/gain/096bd769-b48d-41ea-9eb5-7d305aa8a6fe/w185/fwebp" alt="">
						</div>
                        <div class="caption">
                            <h3><a href="Zenbook14XOLED.php">Zenbook14X OLED</a> </h3>
                            <p>Price: RM 5299 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
						<div class="images">
                        <img src="https://dlcdnwebimgs.asus.com/gain/6176423d-7769-46a0-ba01-a4d9008c86b9/w185/fwebp" alt="">
						</div>
                        <div class="caption">
                            <h3><a href="Zenbook14FlipOLED.php">Zenbook Flip </a> </h3>
                            <p>Price: RM 5699 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
						<div class="images">
                        <img src="https://dlcdnwebimgs.asus.com/gain/e1c062dc-b3ad-4b84-b310-eda9f5984d2c/w185/fwebp" alt="">
						</div>
                        <div class="caption">
                            <h3><a href="zenbook_duo.php">Zenbook Duo</a> </h3>
                            <p>Price: RM 10,999</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
						<div class="images">
                        <img src="https://dlcdnwebimgs.asus.com/gain/d1a36052-052e-45fe-a82b-ec9c871ca9a9/w185/fwebp" alt="">
                        </div>
						<div class="caption">
                            <h3><a href="ZenbookS13OLED.php">Zenbook S13</a> </h3>
                            <p>Price: RM 5099</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="mouse">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://assets3.razerzone.com/kDEawCJ3eomZXiLYY8YZOpREShY=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh95%2Fh52%2F9198280966174%2FDeathadder-Essential-500x500.png" alt="" style="max-height: 200px;">
                        </div>
                        <div class="caption">
                            <h3><a href="razer_deathadder.php">Razer Deathadder</a> </h3>
                            <p>Price: RM 99 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://assets3.razerzone.com/236X3BHtxxXBNmo6pqEnwLI4HjI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhf7%2Fhb6%2F9529652412446%2Fbasilisk-v3-2-500x500.png" alt="" style="max-height: 200px;">
                        </div>
                        <div class="caption">
                            <h3><a href="basilisk.php">Razer Basilisk</a> </h3>
                            <p>Price: RM 329 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://assets3.razerzone.com/j7MMNWrNqdDLQuWsMob6ydYs5QI=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh9f%2Fh4c%2F9529653461022%2Fviper-v2-pro-black-2-500x500.png" alt="" style="max-height: 200px;">
                        </div>
                        <div class="caption">
                            <h3><a href="viper.php">Razer Viper</a></h3>
                            <p>Price: RM 749 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://assets3.razerzone.com/OrGvLdu5Zv02H5kMRLaPiGmhmPg=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhb2%2Fhb9%2F9529652379678%2Fnaga-v2-pro-2-500x500.png" alt="" style="max-height: 200px;">
                        </div>
                        <div class="caption">
                            <h3><a href="naga.php">Razer Naga V2 </a></h3>
                            <p>Price: RM 889 </p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="keyboard">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x60-wireless-keyboard/gallery/pro-x-60-keyboard-black-gallery-1-us.png?v=1" alt="" style="max-height: 200px;">
                        </div>
                        <div class="caption">
                            <h3><a href="x60.php">Logitech Pro X60</a></h3>
                            <p>Price: RM 769</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/non-braid/g213-finch/g213-gallery-1-nb.png?v=1" alt="" style="max-height: 200px; width: 250px">
                        </div>
                        <div class="caption">
                            <h3><a href="g213.php">Logitech G213</a></h3>
                            <p>Price: RM 189</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x-keyboard/pro-x-keyboard-gallery-1.png?v=1" alt="" style="max-height: 200px;width: 250px">
                        </div>
                        <div class="caption">
                            <h3><a href="proX.php">Logitech Pro X</a></h3>
                            <p>Price: RM 649</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <div class="images">
                        <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/keyboards/g715-wireless-keyboard/gallery/g715-gallery-1.png?v=1" alt="" style="max-height: 200px;width: 250px">
                        </div>
                        <div class="caption">
                            <h3><a href="g715.php">Logitech G715</a></h3>
                            <p>Price RM 849</p>
                            <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>