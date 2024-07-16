<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Logitech Pro X60</title>
<link href="Product_Page.css" rel="stylesheet">
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
<img src="https://resource.logitechg.com/w_797,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/pro-x60-wireless-keyboard/pro-x-60-pro-inspired-60-design-feature.jpg?v=1"></img>
<iframe width="1250" height="460" src="https://www.youtube.com/embed/K4WeneCTQIg" title="YouTube video player" frameborder="0" allow="autoplay" allowfullscreen></iframe>

</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Logitech Pro X60 Wireless Keyboard</b></h1>
<h2 style="text-align:center"><b>ZERO COMPROMISE PERFORMANCE</b></h2>
<h3 style="text-align:center"> 
        Designed in collaboration with the world’s top esports players,
the PRO X 60 is engineered to break every barrier between you and the win. Compete at a new level with the next generation of PRO keyboard.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Logitech Pro X60</h2>
<h3>RM769</h3>
<h4>Black</h4>
<li>Wireless</li>
<li>60 percent</li>
<li>Customizable Key Control</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>