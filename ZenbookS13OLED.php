<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>ASUS Zenbook S 13 OLED</title>
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
<video  width="1250" height="460" controls autoplay loop muted>
  <source src="https://dlcdnwebimgs.asus.com/files/media/5bf2aa5e-351d-44c6-a06c-d8d00059d75a/v1/features/images/video/large/wdVideos/wdVideos_1_video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


<h1 style = "text-align:center"><b> ASUS Zenbook S 13 OLED (UX5304) </b></h1>
<h2 style = "text-align:center"><b> World’s Slimmest OLED Ultraportable Laptop </b></h2>
<h3 style = "text-align:center"> 
Lighten up your life with the ultra-thin and super-light Zenbook S 13 OLED! 
This 1 cm-thin2, 1 kg-light3 marvel uses efficient Intel® Core™ Ultra processors, and 
the amazing 13.3-inch 16:10 3K OLED HDR NanoEdge4 display delivers brilliant visuals. 
ASUS is completely committed to purposeful innovation that supports a healthier planet, 
so we’ve also made Zenbook S 13 OLED the most eco-friendly Zenbook ever, in line with our core values. 
More care, less impact!
</h3>

<hr />

<div class="row" >

        <div class="columnA">
            <div class="product-box">
				<h2>Model A</h2>
				<h3>RM5,099</h3>
				<h4>Basalt Grey</h4>
					<li>Intel® Core™ i7-1355U Processor 1.7 GHz (12MB Cache, up to 5.0 GHz, 10 cores, 12 Threads);</li>
					<li>Windows 11 Home</li>
					<li>13.3-inch, 3K (2880 x 1800) OLED 16:10 aspect ratio</li>
					<li>Intel® Iris Xe Graphics </li>
					<li>16GB LPDDR5X on board</li>
					<li>512GB M.2 NVMe™ PCIe® 4.0 SSD</li>
					<li>Wi-Fi 6E(802.11ax) (Dual band) 2*2 + Bluetooth® 5.3 Wireless Card</li>
					<li>1x USB 3.2 Gen 1 Type-A</li>
					<li>2x Thunderbolt™ 4 supports display / power delivery</li>
					<li>1x HDMI 2.1 TMDS</li>
					<li>1x 3.5mm Combo Audio Jack</li>
	
					 <!--User has to login to purchase the items-->
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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