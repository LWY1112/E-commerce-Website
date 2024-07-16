<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Logitech G715 Wireless Keyboard</title>
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
  <source src="https://cvf.shopee.com.my/file/d24a75ab587ebc3f01ba654b77ae1628" type="video/mp4">
  Your browser does not support the video tag.
</video>
<img src="https://down-my.img.susercontent.com/file/sg-11134201-22120-ojdszdmlnvkva0"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Logitech G715 Wireless Keyboard</b></h1>
<h2 style="text-align:center"><b>A compact tenkeyless mechanical keyboard that delivers low-key vibes with high-key performance.</b></h2>
<h3 style="text-align:center"> 
        From the Aurora Collection, G715 is a gaming-grade LIGHTSPEED wireless and Bluetooth® keyboard designed for comfort with included cloud-soft palm rest.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Logitech G715 Wireless Keyboard</h2>
<h3>RM799</h3>
<h4>White</h4>
<li>87 key tenkeyless</li>
<li>Individual RGB mechanical switches</li>
<li>Razer™ Focus Pro 30K Optical Sensor</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>