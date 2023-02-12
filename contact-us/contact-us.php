<?php 

require_once "../auth/config.php";



session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../auth/login.php");
    exit;
}


$name = $pw = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  if(empty(trim($_POST["name"]))){
      $name = "";
  } else{
      $name = trim($_POST["name"]);
  }
  if(empty(trim($_POST["ms"]))){
      $ms = "";
  } else{
      $ms = trim($_POST["ms"]);
  }


  if(!empty($name) && !empty($ms)){
        
    $sql = "INSERT INTO messages (name, ms) VALUES (?, ?)";
     
    if($stmt = $mysqli->prepare($sql)){
        $stmt->bind_param("ss", $param_name, $param_ms);
        
        $param_name = $name;
        $param_ms = $ms; 
        
        if($stmt->execute()){
            echo "TET";
            header("location: contact-us.php");
            unset($_POST['name']);
            unset($_POST['ms']);

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        $stmt->close();
    }
}
  $mysqli->close();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact-us.css">
</head>
<body>
    <nav class="navigation">
        <h2 ><a href="../home-page/home.php" id="contact-link">Home</a></h2>
        <h2><a href="../about-us/about-us.php" id="contact-link">Our Music </a></h2>
        <h2 id="active"><a>Contact Us</a></h2>
        <h2 ><a href="../premium/premium.php" id="contact-link">Go Premium</a></h2>
        <h2 ><a href="../news/news.php" id="contact-link">News</a></h2>
        <h2 style="background-color: grey;"><a href="../auth/logout.php" style="text-decoration: none"> Log Out</a></h2>


    </nav>
    <div class="container">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Prishtine, Kosove</div>
              <div class="text-two">Bregu i Diellit</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">044111222</div>
              <div class="text-two">+38344111222</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">gm47731@ubt-uni.com</div>
              <div class="text-two">dd47262@ubt-uni.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any questions about our music and want an answer, please submit on the form below!</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-box">
              <input type="text" name="name" id="title" placeholder="Enter your title">
            </div>
            <div class="input-box">
              <textarea type="text" name="ms" id="ms" placeholder="Enter your message"
               style=" height: 100px;
                      margin-bottom: 34px;" ></textarea>
            </div>
            <div>
                <button type="submit" style="padding: 10px !important;
                              background-color: black !important;
                              font-size: 20px !important;
                              font-family: cursive !important;
                              border-radius: 20px !important;
                              color: white;
                              margin-top:70px;
                              cursor: pointer" id="submit">Send Now</button>
            </div>
          </form>
        </div>
        </div>
      </div>
</body >
<script src="contact-us.js"></script>

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