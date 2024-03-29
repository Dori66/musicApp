<?php
session_start();
 
 if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
     header("location: ../auth/login.php");
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
    <link rel="stylesheet" href="about-us.css">

</head>
<body>
    <nav class="navigation">
        <h2 ><a href="../home-page/home.php" id="contact-link">Home</a></h2>
        <h2 id="active"><a>Our Music </a></h2>
        <h2 ><a href="../contact-us/contact-us.php" id="contact-link"> Contact Us</a></h2>
        <h2 ><a href="../premium/premium.php" id="contact-link">Go Premium</a></h2>
        <h2 ><a href="../news/news.php" id="contact-link">News</a></h2>
        <h2 style="background-color: grey;"><a href="../auth/logout.php" style="text-decoration: none"> Log Out</a></h2>


    </nav>
    <div class="About-us">
        <div class="left-side">
            <h2 id="header">About Us</h2>
            <p id="about-p">With Spotify, it’s easy to find the right music or podcast for every moment – on your phone, your computer, your tablet and more.

                There are millions of tracks and episodes on Spotify. So whether you’re behind the wheel, working out, partying or relaxing, the right music or podcast is always at your fingertips. Choose what you want to listen to, or let Spotify surprise you.
                
                You can also browse through the collections of friends, artists, and celebrities, or create a radio station and just sit back.
                
                Soundtrack your life with Spotify. Subscribe or listen for free
            </p>
        </div>
        <div class="right-side">
            <h2 id="service">Customer Service and Support</h2>

            <p class="service">
                1. <b>Help site</b>. Check out our help site for answers to your questions and to learn how to get the most out of Spotify and your music.
            </p>
            <p class="service">
                2. <b>Community</b> . Get fast support from expert Spotify users. If there isn’t already an answer there to your question, post it and someone will quickly answer. You can also suggest and vote on new ideas for Spotify or simply discuss music with other fans.
            </p>
            <p class="service">
                3. <b> Contact us</b>. Contact our Customer Support if you don’t find a solution on our support site or Community.

            </p>    
        </div>
  

      </div>
</body>
<footer>
    <div class="footer-container-1">
         <h5>Company</h5>
         <span>About</span>
         <span>Jobs</span>
         <span>Music</span>
    </div>
    <div class="footer-container-1">
        <h5>COMMUNITIES</h5>
        <span>For Artist</span>
        <span>For You</span>
        <span>For Investors</span>
        <span>For Vendors</span>
    </div>
</footer>
</html>