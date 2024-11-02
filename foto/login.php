<?php

require 'function/logincontoh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myGallery-Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    
    <div class="login-container">
        <div class="logo">
            <h1>Welcome to mygallery.</h1>
        </div>

        <?php if(isset($error)) : ?>
            <p style="color: red; text-align: center;">email / password salah!</p>
        <?php endif; ?>    
       
        <form action="" method="post">
            <div class="input-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email" required autofocus autocomplete="off">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn">Log In</button>
            <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>
</body>
</html>
