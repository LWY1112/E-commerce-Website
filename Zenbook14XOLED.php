<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>



<!DOCTYPE html>
<html>

<head>
	<title>ASUS Zenbook 14X OLED</title>
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
  <source src="https://dlcdnwebimgs.asus.com/files/media/e1f42593-95a9-45ae-8e29-e8907c6392b8/v3/features/images/video/medium/wdVideos/wdVideos_1_video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<div class="laptopimg">
<img src="https://dlcdnwebimgs.asus.com/files/media/e1f42593-95a9-45ae-8e29-e8907c6392b8/v3/features/images/medium/1x/kv.jpg"></img>
</div>

<h1 style = "text-align:center"><b> ASUS Zenbook 14X OLED (UX3404) </b></h1>
<h2 style = "text-align:center"><b> The Perfect OLED Laptop for Digital Nomad </b></h2>
<h3 style = "text-align:center"> 
Put your mobile life on a rock-solid footing with the new Zenbook 14X OLED. 
This new eco-friendly thin-and-light laptop has a choice of Sandstone Beige, 
with a remarkable new ceramic-like finish on the lid, or serene Inkwell Gray. 
Inside, there’s one of the latest 13th Gen Intel® Core™ H-Series CPUs with 16 GB of fast LPDDR5 memory and a 1 TB PCIe® 4.0 SSD. 
There’s also a bigger 14.5-inch 16:10 2.8K 120 Hz OLED HDR NanoEdge display1, NVIDIA® GeForce RTX™ 3050 graphics, and a longer-lasting 70 Wh battery. 
Zenbook 14X OLED delivers more — in every way!
</h3>

<hr />

<div class="row" >

        <div class="columnA">
            <div class="product-box">
				<h2>Model A</h2>
				<h3>RM5,299</h3>
				<h4>Inkwell Gray</h4>
					<li>Intel® Core™ i5-13500H Processor 2.6 GHz (18MB Cache, up to 4.7 GHz, 12 cores, 16 Threads)</li>
					<li>Windows 11 Home</li>
					<li>14.5-inch 2.8K (2880 x 1800) OLED 16:10 aspect ratio</li>
					<li>Intel® Iris Xe Graphics </li>
					<li>16GB LPDDR5 on board</li>
					<li>512GB M.2 NVMe™ PCIe® 4.0 SSD</li>
					<li>Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth® 5</li>
					<li>1x USB 3.2 Gen 1 Type-A</li>
					<li>2x Thunderbolt™ 4 supports display / power delivery</li>
					<li>1x HDMI 2.1 TMDS</li>
					<li>1x 3.5mm Combo Audio Jack</li>
					<li>2 Years Global Warranty</li>
					<li>Sleeve / USB-A to RJ45 gigabit ethernet adapter</li>
	
					<!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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