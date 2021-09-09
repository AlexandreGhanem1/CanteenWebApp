
<?php

function emptyInputSignup($firstName, $lastName, $userName, $companyName, $email, $password, $passwordRepeat) {
    global $result;
    if (empty($firstName) or empty($lastName) or empty($userName) or empty($companyName) or empty($email) or empty($password) or empty($passwordRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($userName) {
    global $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    global $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pswMatch($password,$passwordRepeat) {
    global $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $userName, $email) {
    $sql = "SELECT * FROM user WHERE username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $userName, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $firstName, $lastName, $userName, $email, $companyName, $password) {
    $sql = "INSERT INTO user (FirstName, LastName, Username, Email, Company, Password) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPsw = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $userName, $email, $companyName, $hashedPsw);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../signup.php?error=none");
    exit();

}

function emptyInputLogin($userName, $password)  {
    global $result;
    if (empty($userName) or empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $userName, $password) {
    $uidExists = uidExists($conn, $userName, $userName);

    if ($uidExists === false) {
        header("location: ../login.php?error=wrongusername");
        exit();
    }
    $pswHashed = $uidExists["Password"];
    $checkPsw = password_verify($password, $pswHashed);

    if ($checkPsw === false) {
        header("location: ../login.php?error=wrongpassword");
        exit();
    }

    if ($checkPsw === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../mainuser.php");
        exit();
    }
}

