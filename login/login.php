



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    
    <title >Document</title>
</head>
<body>
    <form action="login.php" method="post" autocomplete="off">
    <div class="container">
        <span id="log-in">Login</span>

        <span id="username" >Email</span>
        <input type="text" id="usernameInput" name="email" placeholder="Type your email" value="">
        <span id="error-username"></span>

        <span id="password">Password</span>
        <input type="password" id="passwordInput" name="password" placeholder="Type your password" value="">
        <span id="error-pw"></span>
        

        <span id="forgot">Forgot Password?</span>

        <button class="login-btn" name="submit">LOGIN</button>
    </div>
    </form>
</body >
<?php

require '../register/function.php';


$login = new Login();

$email = '';
$password = '';

if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
}


echo "<script> alert('DORIs'); </script>";
$result = $login->login($email, $password);
    echo "<script> alert('$result'); </script>";

if(isset($_POST["submit"])){

    echo "<script> alert('DORIss'); </script>";

    $result = $login->login($email, $password);
    echo "<script> alert('$result'); </script>";

    // if($result == 1){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $login->idUser();
        header("Location: ../home-page/home.php");
//     }
//     elseif($result == 10){
//         echo "<script> alert('Wrong Password'); </script>";

//     }
//     elseif($result == 100){
//         echo "<script> alert('User not registered'); </script>";
//     }
}


?>
<script src="login.js"></script>
</html>