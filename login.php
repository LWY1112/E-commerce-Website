<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | DigitalDen</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		<link href="css/signup.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body class="background">
     <?php include 'includes/header.php'; ?>
    
        <div class="container-fluid decor_bg" id="content">
		
            <div class="row">
                <div class="container">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
					<div class="form-container">
                        <h2>Login</h2>
						<p class="text-warning"><i>Login to make a purchase</i><p>
                        <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
							<?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                        </form><br/>
						<p>Don't have an account? <a href="signup.php">Register</a></p>
						</div>
                    </div>
                </div>
            </div>
        </div>
	</div>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>