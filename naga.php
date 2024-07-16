<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Razer Naga V2</title>
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
<img src="https://assets2.razerzone.com/images/pnx.assets/f705f432b5510692edc051338f0181c7/razer-naga-v2-hyperspeed-image2-1920x580-update.webp"></img>
<img src="https://sweetloot.my/wp-content/uploads/2023/07/razer-naga-v2-pro-feature3.jpg"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Razer Naga V2 HyperSpeed Mouse</b></h1>
<h2 style="text-align:center"><b>The best-in-slot wireless ergonomic MMO mouse.</b></h2>
<h3 style="text-align:center"> 
        Optimize skill rotations with an arsenal of 19 buttons and a dual mode scroll wheel.
		Power through raid progression with potent wireless performance backed by up to 250 hours of battery life on HyperSpeed Wireless.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Razer Naga V2</h2>
<h3>RM590</h3>
<h4>Black</h4>
<li>Wireless</li>
<li>30000 DPI</li>
<li>Razer™ Focus Pro 30K Optical Sensor</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>