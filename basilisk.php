<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>
 
 
<!DOCTYPE html>
<html>
<head>
<title>Razer Basilisk Mouse</title>
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
<img src="https://assets2.razerzone.com/pages/basilisk-v3-4D578898E8144Le8da21dde32b7a9f5f/power-beyond-logic-3.jpg"></img>
<img src="https://assets2.razerzone.com/pages/basilisk-v3-4D578898E8144Le8da21dde32b7a9f5f/basiliskv3_button-config_EXCEL.jpg"></img>
</div>
 
    <!-- Product details -->
<h1 style="text-align:center"><b>Razer Basilisk V3 Mouse</b></h1>
<h2 style="text-align:center"><b>The quintessential ergonomic gaming mouse for customized performance</b></h2>
<h3 style="text-align:center"> 
        Create, control, and champion your playstyle with the new Razer Basilisk V3. 
        With 10+1 programmable buttons, an intelligent scroll wheel, and a heavy dose of Razer Chroma™ RGB, it's time to light up the competition your way.
</h3>
 
    <hr />
 
    <div class="row">
<div class="columnA">
<div class="product-box">
<h2>Razer Basilisk Mouse</h2>
<h3>RM360</h3>
<h4>Black</h4>
<li>26000 DPI</li>
<li>Refined Ergonomic Form</li>
<li>Razer™ Focus Pro 30K Optical Sensor</li>
<!-- Add more features here -->
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
</div>
</div>
</div>
 
    <?php include("includes/footer.php"); ?>
 
</body>
</html>