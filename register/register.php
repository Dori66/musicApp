

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title >Document</title>
</head>
<body>



    <form action="register.php" method="post" autocomplete="off">
        <div class="container">
            <span id="sign-up">Sign Up</span>
    
            <span id="username"  >Name</span>
            <input type="text" id="name" name="name" placeholder="Type your username">
            <span id="error-name"></span>
    
            
            <span id="username"  >Age</span>
            <input type="text" id="age" name="age" placeholder="Type your Age">
            <span id="error-age"></span>
    
            
            <span id="username" >Email</span>
            <input type="text" id="usernames" name="email" placeholder="Type your email">
            <span id="error-username"></span>
    
            <span id="password">Password</span>
            <input type="password" id="pw" name="password" placeholder="Type your password">
            <span id="error-pw"></span>
    
    
            <button class="button" name="submit" id="sign-up-button" type="submit">Sign Up</button>
        </div>
    </form>
    
</body>
<script src="register.js" defer></script>
</html>