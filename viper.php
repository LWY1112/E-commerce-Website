<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Razer Viper Mouse</title>
<link rel="stylesheet" href="Product_Page.css" />
<!-- Instruct the browser on how to control the page's dimensions and scaling -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title of the product page -->
<title>Products | DigitalDen</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
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
 
   
<!-- Mouse image -->
<!-- Replace the image source with the appropriate one for the mouse -->
<div class="laptopimg">
<video width="1250" height="460" controls autoplay loop muted>
  <source src="https://assets2.razerzone.com/images/pnx.assets/44ede62068f96c65b07c1d1b9e87046b/asymmetric-cut-off.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
<img src="https://assets2.razerzone.com/images/pnx.assets/aaa07b071e7228ed74b38f04fffdfd04/razer-viper-v3-hyperspeed-trusted-by-pros-desktop.webp"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Razer Viper V3 HyperSpeed Mouse</b></h1>
<h2 style="text-align:center"><b>The shape that inspired an esports revolution returns with a new evolution</b></h2>
<h3 style="text-align:center"> 
        Made for esports pros and competitive gamers, the Razer Viper is favored for its no-nonsense performance and lightweight symmetrical design. 
		Ideal for medium to large hand sizes and users who favor a claw or fingertip grip, choose the perfect model that adapts to all your needs.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Razer Viper V3</h2>
<h3>RM320</h3>
<h4>Black</h4>
<li>Wireless</li>
<li>82 g (with included AA battery)</li>
<li>Razer™ Focus Pro 30K Optical Sensor</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>