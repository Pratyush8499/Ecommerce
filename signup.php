<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style1.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Signup | E-Store</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-md-6">
                        <img src="img/signup1.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="col-md-6">
                        <h2>SIGN UP</h2>
                        <form  action="Signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>
