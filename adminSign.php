<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <script type="text/javascript" src="main.js"></script>
    <title>Admin Sign In</title>
</head>

<body>
    <div class="containersigninadmin">
        <h1>Sign in as the admin</h1>
        <div>
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="uname" required>
        </div>
        <div>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <div>
            <a href="mainadmin.php"><button type="submit">Login</button></a>
        </div>
        <div>
            Are you not the admin? <a href="login.php">Sign In</a> here
        </div>
    </div>
</body>

</html>