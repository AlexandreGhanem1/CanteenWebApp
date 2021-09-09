<?php

$result = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    


    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $userName = $_POST["uname"];
    $companyName = $_POST["cname"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $passwordRepeat = $_POST["pswrepeat"];
    $role = 0;

    require_once 'database.inc.php';
    require_once 'functions.inc.php';
    
    // print_r($_POST);
    // exit();

    $sql = "Select * from user where username='$userName'";
    $result = mysqli_query($conn, $sql);

    if (emptyInputSignup($firstName, $lastName, $userName, $companyName, $email, $password, $passwordRepeat) !== false) {
        header("location:../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($userName) !== false) {
        header("location:../signup.php?error=emptyuid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location:../signup.php?error=emptyemail");
        exit();
    }

    if (pswMatch($password, $passwordRepeat) !== false) {
        header("location:../signup.php?error=emptypasswordsdontmatch");
        exit();
    }

    if (uidExists($conn, $userName, $email) !== false) {
        header("location:../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $firstName, $lastName, $userName, $email, $companyName, $password);

}
else {
    header("location:../signup.php");
    exit();
}