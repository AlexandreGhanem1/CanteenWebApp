<?php
    include_once 'includes/database.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <script type="text/javascript" src="main.js"></script>
    <title>login</title>
</head>

<body>
    <div class="containerlogin">
        <h1>Sign in</h1>
        <form action="includes/login.inc.php" method="post">
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email/Username" name="email" required>
        </div>
        <div>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>        
        <div>
            <a href="mainuser.php"><button type="submit" name="submit">Login</button></a>
        </div>
        </form>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <div>
            Forgot your <a href="forgottenPsw.php">password?</a>
        </div>
        <div>
            If you are not signed in, please <a href="signup.php">Sign Up</a>
        </div>
    </div>
</body>

</html>