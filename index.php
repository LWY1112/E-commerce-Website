<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Welcome | DigitalDen</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id="banner_image" style="padding-bottom: 50px; text-align: center; color: #f8f8f8; background: url('img/banner.jpg') no-repeat center center; background-size: cover;">
                <div class="container"> 
                    <center>
                        <div id="banner_content" style="position: relative; padding-top: 6%; padding-bottom: 6%; margin-top: 12%; margin-bottom: 12%; background-color: rgba(0, 0, 0, 0.7); max-width: 730px;">
							<h1>Welcome to our Premium IT Shop!</h1>
							<h2>Enjoy exclusive access to top-tier devices.</h2>
							<br/>
							<a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
						</div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
			
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#laptop" >
                            <div class="thumbnail">
                                <img src="https://dlcdnwebimgs.asus.com/gain/096bd769-b48d-41ea-9eb5-7d305aa8a6fe/w185/fwebp" alt="" style="width: 100%; max-height: 300px;">
                                <div class="caption">
                                    <h3>Laptops</h3>
                                    <p>Powerful computing on the move.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#mouse" >
                            <div class="thumbnail">
                                <img src="https://assets2.razerzone.com/images/pnx.assets/dd2cb52f4bf27ff926aa88e6df386019/razer-basilisk-v3-pro-500x500.png" alt="" style="width: 100%; max-height: 300px;">
                                <div class="caption">
                                    <h3>Mouse</h3>
                                    <p>Precision at your fingertips.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#keyboard" >
                            <div class="thumbnail">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x-keyboard/pro-x-keyboard-gallery-1.png?v=1" alt="" style="width: 100%; height: 300px;">
                                <div class="caption">
                                    <h3>Keyboards</h3>
                                    <p>Effortless typing, enhanced productivity.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
			<p style="text-align: center;">*Each customer can purchase only one device</p>
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>