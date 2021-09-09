<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="public/main.css">
    <script type="text/javascript" src="main.js"></script>
    <title>Sign Up</title>
</head>

<body>
    <div class="containersignup">
        <h1>Sign up</h1>
        <form action="includes/signup.inc.php" method="post">
            <div>
                <b>First Name</b>
                <input type="text" placeholder="Enter Your First Name" id="fname" name="fname" required>
            </div>
            <div>
                <b>Last Name</b>
                <input type="text" placeholder="Enter Your Last Name" id="lname" name="lname" required>
            </div>
            <div>
                <b>Username</b>
                <input type="text" placeholder="Enter Your Username" id="uname" name="uname" required>
            </div>
            <div>
                <b>Company Name</b>
                <input type="text" placeholder="Enter Your Company Name" id="cname" name="cname" required>
            </div>
            <div>
                <b>Email</b>
                <input type="text" placeholder="Enter Your Email" id="email" name="email" required>
            </div>
            <div>
                <b>Password</b>
                <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
            </div>
            <div>
                <b>Re-Password</b>
                <input type="password" placeholder="Repeat Your Password" id="pswrepeat" name="pswrepeat" required>
            </div>
            <div>
                <button type="submit" name="submit">Sign Up</button>
            </div>
        </form>
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput")
            echo "<p>Fill in all fields!</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "invaliduid")
            echo "<p>Choose a proper username!</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "invalidemail")
            echo "<p>Choose a proper Email:</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "passwordsdontmatch")
            echo "<p>Passwords don't match!</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "stmtfailed")
            echo "<p>Something went wrong, try again!</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "usernametaken")
            echo "<p>Username already taken!</p>";
    }

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "none")
            echo "<p>You have signed up!</p>";
    }
        ?>

        <div>
            If you already have an account, please <a href="login.php">Sign In</a> here
        </div>

    </div>
</body>
</html>

