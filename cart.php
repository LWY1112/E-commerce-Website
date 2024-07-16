<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart | DigitalDen</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/cart.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class= "background">
    <div class="container-fluid" id="cart-content">
        <?php include 'includes/header.php'; ?>
        <div class="row decor_bg">
            <div class="col-md-16">
                <table class="table table-striped special-table">
                    <!--show table only if there are items added in the cart-->
                    <?php
                    $sum = 0;
                    $item_ids = '';
                    $user_id = $_SESSION['user_id'];
                    $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                    $result = mysqli_query($con, $query) or die($mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1) {
                        ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $sum += $row["Price"];
                                $item_ids .= $row["id"] . ", ";
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>RM " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='special-remove-item-link'> Remove</a></td></tr>";
                            }
                            $item_ids = rtrim($item_ids, ", ");
                            echo "<tr><td></td><td>Total</td><td>RM " . $sum . "</td><td><a href='success.php?itemsid=" . $item_ids . "' class='btn btn-primary special-confirm-order-btn'>Confirm Order</a></td></tr>";
                            ?>
                        </tbody>
                        <?php
                    } else {
                        echo "Heyy!! Your Cart is Empty. Please add items to the cart first!";
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
	</div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
