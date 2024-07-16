<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>


<!DOCTYPE html>
<html>

<head>
	<title>ASUS Zenbook DUO</title>
	<link rel = "stylesheet" href= "Product_Page.css" />
	<!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of products page-->
        <title>Products | Life Style Store</title>
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

<!-- Product Video -->
<video width="1250" height="460" controls autoplay loop muted>
  <source src="https://dlcdnwebimgs.asus.com/files/media/c4d8304d-d116-452b-be3d-0471d5260a27/v1/features/images/video/large/kv/kv_video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<video  width="1250" height="460" controls autoplay loop muted>
  <source src="https://dlcdnwebimgs.asus.com/files/media/c4d8304d-d116-452b-be3d-0471d5260a27/v2/features/images/video/large/wdVideos/wdVideos_1_video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


<h1 style = "text-align:center"><b> ASUS Zenbook DUO (2024) UX8406 </b></h1>
<h3 style = "text-align:center"> ASUS Zenbook DUO is a revolutionary dual-screen laptop, with two full-size OLED touchscreens1, 
detachable full-size keyboard and built-in kickstand, — expertly combining multitasking versatility with superb mobility. With 
dual 14-inch 3K OLED 120 Hz displays, you can instantly expand your workspace to up to 19.8 inches. Outstanding performance is 
assured with up to an AI-powered Intel® Core™ Ultra 9 processor and 32 GB LPDDR5x memory, plus up to a 1 TB PCIe® 4.0 SSD. 
Paired with dedicated smart software, intuitive gesture control and an enhanced-lifespan 75 Wh battery, the easy-to-use Zenbook 
DUO maximizes productivity, with zero fuss. Come on — Let’s DUO it.</h3>

<hr />

<div class="row" >

        <div class="columnA">
            <div class="product-box">
				<h2>Model A</h2>
				<h3>RM10,999</h3>
					<li>Windows 11 Home </li>
					<li>Intel® Evo™ certified laptop</li>
					<li>Intel i3 Core</li>
					<li>14.6 mm, 1.35 kg </li>
					<li>Dual 14" 3K 120Hz OLED NanoEdge touchscreen</li>
					<li>512GB Lexar SSD</li>
					<li>8GB DDR4 RAM</li>
					<li>Long-lasting 75 Wh battery</li>
	
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
			</div>
        </div>

        
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>