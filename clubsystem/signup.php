<?php

$username_notif = " ";
$passcode_notif = " ";
$email_notif = " ";
$club_notif =" ";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $register_username = trim($_POST['register_username'] ?? '');
    $register_passcode = $_POST['register_passcode'] ?? '';
    $email = $_POST['email'] ?? '';



    if (!preg_match("/^[A-Za-z .'-]{7,50}$/", $register_username)) {
        $username_notif = 'Name must be 7-50 letters.';
    } else {
        $username_notif = 'Username is valid';
    }

    if (! preg_match("/^[A-Za-z .'-]{7,50}$/", $register_passcode)){
        $passcode_notif= 'Password is Invalid';
    }
    else{
        $passcode_notif= 'Password is  valid';
    }
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_notif= 'Invalid email address.';
} else {
    $email_notif= 'Email accepted';
}
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['passcode'] ?? '';
    }
    

}
?>








<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
     <img src="signup_art.jpg" class="signup_art">
    <div class="main">
         <h1 id="title"> SIGN UP </h1>
        <div class="mainBg">
            <form action="signup.php" method="POST">
                <input type="text" name="register_username" placeholder="Username" required>
                <span><?= $username_notif ?></span>
                <input type="text" name="email" placeholder="Email" required><span><?= $email_notif ?> </span>

                <input type="password" name="register_passcode" placeholder="Password" required>
                <span><?= $passcode_notif ?></span>
                <input type="password" name="club_name" placeholder="Enter your club name" required>
                <span><?= $club_notif ?></span>

                <button type="submit">CREATE ACCOUNT</button> <br>
                <p>Already have an account?  <a href="index.php" class="signupButton">Sign In</a></p>
            </form>
        </div>
    </div>


</body>

</html>