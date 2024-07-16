<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>G213 Prodigy</title>
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
  <source src="https://cvf.shopee.com.my/file/ed19043fa68a1c6a304dd1d3472917d9" type="video/mp4">
  Your browser does not support the video tag.
</video>
<img src="https://resource.logitechg.com/w_797,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/non-braid/g213-finch/g213-feature-2-nb.png?v=1"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Logitech G213 Prodigy Keyboard</b></h1>
<h2 style="text-align:center"><b>Gaming Grade performance</b></h2>
<h3 style="text-align:center"> 
        The G213 gaming keyboard features Logitech G Mech-Dome keys that are specially tuned to deliver a superior tactile response and overall performance profile similar to a mechanical keyboard.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Logitech G213 Prodigy Keyboard</h2>
<h3>RM157</h3>
<h4>Black</h4>
<li>Wired</li>
<li>Spill-resistant</li>
<li>Customizable LIGHTSYNC RGB lighting</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>