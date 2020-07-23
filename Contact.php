<?php
include "includes/common.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us | E-Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style1.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
      
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/Check_if_added.php';
        ?>
        <div class="container-fluid">
            <div class="row text-left">
                <div class=" col-md-8 col-md-offset-1">
                    <h2> LIVE SUPPORT</h2>
                    <h4> 24 houres | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p class="text-muted">
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. 
There are many variations of passages of Lorem Ipsum avaikable, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrasing hidden in the middle of text.
                    </p> 
                    </div>
                <div class="col-md-2">
                <img src="img/contact.png" alt="" id="image">
                </div>
            </div>
            <div class="row text-left">
            <div class=" col-md-5 col-md-offset-1">
                <h2>CONTACT US</h2>
                <form>
                    <div class="form-group">
                   Name:
                        <input type="text" class="form-control" name="Name"></div>
                    <div class="form-group">
                   Email:
                        <input type="email" class="form-control" name="email"></div>
                    <div class="form-group">
                    Message:
                    
                    <textarea rows="4" name="comment" form="message" class="form-control">    
                    </textarea></div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                     </form><br>
                    </div>
                <div class="col-md-4 col-md-offset-2" >
                    <h2>Company Information:</h2>
                    <p class="text-muted">500 Lorem Ipsum Dolor Sit, <br>
                        22-56-2-9 Sit Amet, Lorem, <br>
                        USA<br>
                        Phone:(00) 222 666 444 <br>
                        Fax: (000) 000 00 00 0<br>
                        Emai:infomycompany@gmail.com<br>
                        Follow on: Linkedin, Twitter<br>
                    </p>
                </div>
               
            </div>    
            </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
