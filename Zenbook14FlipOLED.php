<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title> ASUS Zenbook 14 Flip OLED</title>
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
<video  controls autoplay loop muted>
  <source src="https://dlcdnwebimgs.asus.com/files/media/63413a19-7c33-4ae4-bc5a-7161edbf2fab/v1.1/features/images/video/medium/wdVideos/wdVideos_1_video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="laptopimg">
<img src="https://dlcdnwebimgs.asus.com/files/media/63413a19-7c33-4ae4-bc5a-7161edbf2fab/v1.1/features/images/medium/1x/kv/main.jpg"></img>
</div>

<h1 style = "text-align:center"><b> ASUS Zenbook 14 Flip OLED (UP3404) </b></h1>
<h2 style = "text-align:center"><b> The Perfect OLED Laptop for Proactive Professionals </b></h2>
<h3 style = "text-align:center"> 
The versatile Zenbook 14 Flip OLED is everything you need for your busy on-the-go lifestyle. 
Its compact and elegant chassis now packs a bigger 14-inch 16:10 2.8K OLED HDR touchscreen with superb 
PANTONE® Validated color-accurate visuals, and it supports a 4096-pressure-level MPP 2.0 stylus for natural input. 
Powered by the latest 13th Gen Intel Core CPUs, Zenbook 14 Flip OLED has a class-leading 75 Wh battery, 
and its 1.5 kg-light chassis is just 15.9 mm thin, with a 360° any-position hinge for effortless versatility. 
There’s a powerful Harman Kardon-certified Dolby Atmos® sound system for awesome audio and crystal-clear conferencing. 
Zenbook 14 Flip OLED gives you more power and more versatility!
</h3>

<hr />

<div class="row" >

        <div class="columnA">
            <div class="product-box">
				<h2>Model A</h2>
				<h3>RM5,699</h3>
				<h4>Foggy Silver</h4>
					<li>Intel® Core™ i5-1340P Processor 1.9 GHz (12MB Cache, up to 4.6 GHz, 12 cores, 16 Threads)</li>
					<li>Windows 11 Home</li>
					<li>14.0-inch, WQXGA+ (2880 x 1800) 16:10 aspect ratio</li>
					<li>Intel® Iris Xe Graphics</li>
					<li>16GB DDR5 on board</li>
					<li>512GB M.2 NVMe™ PCIe® 4.0 SSD</li>
					<li>Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth® 5.3 Wireless Card</li>
					<li>1x USB 3.2 Gen 2 Type-A</li>
					<li>2x Thunderbolt™ 4 supports display / power delivery</li>
					<li>1x HDMI 2.1 TMDS</li>
					<li>1x 3.5mm Combo Audio Jack</li>
					<li>2 Years Global Warranty + 1 Year Perfect Warranty</li>
	
					<!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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