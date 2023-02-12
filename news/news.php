
<?php 

require_once "../auth/config.php";


session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../auth/login.php");
    exit;
}

$sql = "SELECT * FROM news";
$result = $mysqli->query($sql);


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
        <h2 style="background-color: grey;"><a href="../auth/logout.php" style="text-decoration: none"> Log Out</a></h2>

    </nav>
    <div class="music-news">
    <h1>Music News</h1>

  <?php 

    if($result-> num_rows > 0){
      while($row = $result->fetch_assoc()){

        echo "<div class='music-news-item'>";
        echo "<img src='".$row['img']."''>";
        echo "<div>";
        echo "<h2>".$row['title']."</h2>";
        echo "<p>".$row['description']."</p>";
        echo "</div>";
        echo "</div>";
      }
    }

?>


  


</body>
</html>