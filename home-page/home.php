<?php 


require_once "../auth/config.php";


session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../auth/login.php");
    exit;
}


$sql = "SELECT * FROM home";
$result = $mysqli->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>
<body>
    <nav class="navigation">
        <h2 id="active"><a>Home</a></h2>
        <h2><a href="../about-us/about-us.php" id="contact-link">Our Music </a></h2>
        <h2 ><a href="../contact-us/contact-us.php" id="contact-link">Contact Us</a></h2>
        <h2 ><a href="../premium/premium.php" id="contact-link">Go Premium</a></h2>
        <h2 ><a href="../news/news.php" id="contact-link">News</a></h2>
        <h2 style="background-color: grey;"><a href="../auth/logout.php" style="text-decoration: none"> Log Out</a></h2>
    </nav>
    <h1>Your Favorites Songs</h1>

    <div class="container">
             <div class="swiper">
                <div class="swiper-wrapper">
    <?php 
        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<div class='swiper-slide'>";
                echo "<div class='left-side' style='height:auto;'>";
                echo "<img src='playy.png' id='play-image'>";
                echo "<h3 class='h3'>". $row["title"] . "</h3>";
                echo "<h5>". $row["Singer"] . "</h5>";

                echo "<img src='venatt.png'>";
                echo "</div>" ;
                echo "</div>";
             }
}   
?>                    ...
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-scrollbar"></div>
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="home.js"></script>
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