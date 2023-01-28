<?php 


require_once "../test/config.php";


session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../test/login.php");
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
</head>
<body>
    <nav class="navigation">
        <h2 id="active"><a>Home</a></h2>
        <h2><a href="../about-us/about-us.php" id="contact-link">Our Music </a></h2>
        <h2 ><a href="../contact-us/contact-us.php" id="contact-link">Contact Us</a></h2>
        <h2 ><a href="../premium/premium.php" id="contact-link">Go Premium</a></h2>
        <h2 ><a href="../news/news.php" id="contact-link">News</a></h2>
        <h2 style="background-color: grey;"><a href="../test/logout.php" style="text-decoration: none"> Log Out</a></h2>
    </nav>
    <h1>Your Favorites Songs</h1>

    <div class="container">
    <?php 

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<div class='left-side' style='height:auto;'>";
                echo "<img src='playy.png' id='play-image'>";
                echo "<h3 class='h3'>". $row["title"] . "</h3>";
                echo "<h5>". $row["Singer"] . "</h5>";

                echo "<img src='venatt.png'>";
                echo "</div>" ;

             }
}   
?>
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