<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style1.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <title>Cart | E-Store</title>
</head>
<body>
    
    <?php
        require 'includes/header.php';
    ?>
        <div class="content">
        <div class="container">  
            <form action="discount.php" class="form-inline" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="code" placeholder="Enter Discount Code Here">                
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
        <table class="table table-striped table-responsive">
        <?php
       if(isset($_POST['m1'])){
           $disc=$_POST['m1'];
       }
       // $disc = false;
       // if(isset($_POST['m1'])){
        //$disc = $_POST['m1'];
        //} 
        echo $disc;
        $sum = 0;
        $user_id = $_SESSION['user_id'];
        $query = "SELECT products.price AS Price, products.pid, products.name AS Name FROM users_products JOIN products ON users_products.product_id = products.pid WHERE users_products.user_id='$user_id' and status='Added To Cart'";
        $result = mysqli_query($con, $query)or die($mysqli_error($con));
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
                    $sum+= $row["Price"];                                    
                    $id = $row["pid"];
                    echo "<tr><td>" . "#" . $row["pid"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='Cart_remove.php?id={$row['pid']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                if(isset($disc)){
                    $sum = $sum - $sum * (0.2);
                }
                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='Success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
            </tbody>
            <?php
        } else {
            echo "Add items to the cart first!";
        }
        ?>
    </table>
    </div>
    </div>
    

    
    <?php
        require './includes/footer.php';
    ?>  
    
</body>
</html>