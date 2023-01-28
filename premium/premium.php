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
    <link rel="stylesheet" href="premium.css">
</head>
<body>
    <nav class="navigation">
        <h2 ><a href="../home-page/home.php" id="contact-link">Home</a></h2>
        <h2><a href="../about-us/about-us.php" id="contact-link">Our Music </a></h2>
        <h2 ><a href="../contact-us/contact-us.php" id="contact-link">Contact Us</a></h2>
        <h2  id="active"><a>Go Premium</a></h2>
        <h2 ><a href="../news/news.php" id="contact-link">News</a></h2>
        <h2 style="background-color: grey;"><a href="../test/logout.php" style="text-decoration: none"> Log Out</a></h2>
    </nav>


    <div class="container">
        <h2 id="sub">Pick a subscription</h2>
        <div class="plans">
            <div class="plan-item">
                <h2 id="title">Personal</h2>

                <p>You’re creating content or podcasts for your own use.</p>

                <h2 id="title">$10/month*</h2>

                <p>* When you pay $108 upfront for one year. Otherwise $15 / month</p>
                <button class="btn">Subscribe</button>

            </div>
            
            <div class="plan-item">
                <h2 id="title">Commercial</h2>

                <p>You’re a freelancer or business creating commercial products.</p>

                <h2 id="title">$20/month*</h2>

                <p>* When you pay $228 upfront for one year. Otherwise $49 / month.</p>
                <button class="btn">Subscribe</button>

            </div>
            
            <div class="plan-item">
                <h2 id="title">Enterprise</h2>

                <p>You’re a publisher, broadcaster or in need of an enterprise solution.</p>

                <h2 id="title">$50/month*</h2>

                <p>You’re a publisher, broadcaster or in need of an enterprise solution.</p>
                <button class="btn">Subscribe</button>

            </div>

        </div>
    </div>
</body>
</html>