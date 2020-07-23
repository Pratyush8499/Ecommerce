<?php
include "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="style1.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/Check_if_added.php';
        ?>
        
        <div class="container-fluid" id="content">

            <div class="row text-center">
                <div class="col-md-4 col-sm-6" id="login-panel">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                                <h4>Shoes 1</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Blue Kicks </h3>
                            <p>Price: Rs. 2000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>
                 
             

                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 2</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Brown Formal </h3>
                            <p>Price: Rs. 2500.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                   

                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 3</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Brown leather </h3>
                            <p>Price: Rs. 5000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 4</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Black Formal </h3>
                            <p>Price: Rs. 1500.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>

                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 5</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Grey Kicks </h3>
                            <p>Price: Rs. 3000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>

               <div class="col-md-4 col-sm-6" id="login-panel">
                   <div class="panel panel-default" >
                        <div class="panel-heading">
                                <h4>Shoes 6</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Adiddas Pro </h3>
                            <p>Price: Rs. 15000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>
            
            <hr>
            </div>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 7</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/7.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Black Joggers </h3>
                            <p>Price: Rs. 3000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>

                <div class="col-md-4 col-sm-6" id="login-panel">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h4>Shoes 8</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/8.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Brown Sports </h3>
                            <p>Price: Rs. 5000.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>

               <div class="col-md-4 col-sm-6" id="login-panel">
                   <div class="panel panel-default" >
                        <div class="panel-heading">
                                <h4>Shoes 9</h4>
                            </div>
                        <div class="panel-body">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Grey Casual </h3>
                            <p>Price: Rs. 2200.00 </p>
                        </div></div>
                        <div class="panel-footer">
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="" data-toggle="modal" data-target=".bannerformmodal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(1)) 
                                { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    </div>
            
            <hr>
            </div>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

