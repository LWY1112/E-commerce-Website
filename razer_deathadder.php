<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Razer Deathadder Mouse</title>
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
        <img src="https://assets3.razerzone.com/AewNrzFmj0XDmhrKZ2hwwOTc9XQ=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhc4%2Fh47%2F9481236021278%2F230221-da-v3-1500X1000-1.jpg"></img>
		<img src="https://assets3.razerzone.com/lykvH_XluWMVxfLjhPbtZvrCEBk=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh42%2Fh4f%2F9481236283422%2F230221-da-v3-1500X1000-6.jpg"></img>
    </div>

    <!-- Product details -->
    <h1 style="text-align:center"><b>Razer Deathadder Mouse</b></h1>
    <h2 style="text-align:center"><b>Ultra-lightweight Ergonomic Esports Mouse</b></h2>
    <h3 style="text-align:center"> 
        Experience unparalleled accuracy and performance with the Razer Basilisk Mouse. 
        Whether you're gaming or working, this mouse offers the precision and speed you need to dominate.
    </h3>

    <hr />

    <div class="row">
        <div class="columnA">
            <div class="product-box">
                <h2>Razer Deathadder Mouse</h2>
                <h3>RM99</h3>
                <h4>Black</h4>
                    <li>59g Ultra-lightweight Design</li>
                    <li>Refined Ergonomic Form</li>
                    <li>Razer™ Focus Pro 30K Optical Sensor</li>
                    <!-- Add more features here -->
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
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>

</body>
</html>
