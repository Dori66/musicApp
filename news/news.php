
<?php 
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../test/login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <nav class="navigation">
        <h2 ><a href="../home-page/home.php" id="contact-link">Home</a></h2>
        <h2><a href="../about-us/about-us.php" id="contact-link">Our Music </a></h2>
        <h2 ><a href="../contact-us/contact-us.php" id="contact-link">Contact Us</a></h2>
        <h2 ><a href="../premium/premium.php" id="contact-link">Go Premium</a></h2>
        <h2  id="active"><a>News</a></h2>
        <h2 style="background-color: grey;"><a href="../test/logout.php" style="text-decoration: none"> Log Out</a></h2>


    </nav>
    

    <div class="container">
        <div class="item-news">
            s   
        </div>
        
        <div class="item-news">
            s
        </div>
        
        <div class="item-news">
           s 
        </div>
        
        <div class="item-news">
            s
        </div>
    </div>


</body>
</html>