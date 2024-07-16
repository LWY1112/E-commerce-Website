<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Logitech Pro X Keyboard</title>
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
<img src="https://resource.logitechg.com/w_1800,c_limit,f_auto,q_auto,f_auto,dpr_auto/d_transparent.gif/content/dam/gaming/en/products/pro-x-keyboard/pro-x-keyboard-hero-feature-1-desktop.png?v=1"></img>
<img src="https://down-my.img.susercontent.com/file/d34b6883b14bd33b9c194abd98809ad9"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Logitech Pro X Keyboard</b></h1>
<h2 style="text-align:center"><b>The tournament-proven PRO X design</b></h2>
<h3 style="text-align:center"> 
        The pros asked, we listened. With a compact design and user-swappable pro-grade switches, PRO X is pro-tested, tournament-assured, and built to win.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Logitech Pro X Keyboard</h2>
<h3>RM649</h3>
<h4>Black</h4>
<li>1 ms report rate</li>
<li>User-swappable mechanical switches</li>
<li>2 years warranty</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>