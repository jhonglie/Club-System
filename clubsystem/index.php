    <?php

    $stored_username = 'Avram Dansal';
    $stored_passcode = 'dansal123';
    $notif='';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['passcode'] ?? '';

        if ($username === $stored_username && $password === $stored_passcode) {
        $notif = '<p style="color:green;">Login successful! Welcome, '. $stored_username .'</p>';
        } else {
            $notif = '<p style="color:red;">Invalid username or password.</p>';
        }
    }
    ?>






    <!DOCTYPE html>
    <html lang="en">
<head>
    <img src="login_art.jpg" class="signup_art">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
    <body>
        <div class="main">
        <h1>Welcome Back!</h1> <h3> Login to access the Club Membership System</h3> 
            <div class="mainBg">
    <form action="index.php" method="POST">
        <input type="text" name="username" placeholder="Username/Email" required>
        <br>
        <input type="password" name="passcode" placeholder="Password" required>
        <br>
        <button type="submit">LOGIN</button><br>
<p>Not a Member yet? <a href= "signup.php" class="signupButton">Signup </a>  </p>
    </form>
    <?= $notif ?>
</div>
    </div>
    </body>
    </html>




