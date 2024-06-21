<?php
session_start();
require_once("function/user.php");

$email = $_POST["email"];
$password = $_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Invalid email format!";
    header("Location: /login.php");
    exit();
}

if (empty($password)) {
    $_SESSION['password_error'] = "Password cannot be empty!";
    header("Location: /login.php");
    exit();
}

//B1: select user by email
 $user = find_user_by_email($email);
 if ($user == null) {
    $_SESSION['error'] = "Email or password is not correct!";
    header("Location: /login.php");
    exit();
}

//B2: compare password
$verify =password_verify($password, $user["password"]); //true/false
if($verify){
    //user login successful
    $_SESSION["auth"] = $user;
    header("Location: /");
} else{
    $_SESSION['error'] = "Email or password is not correct!";
    header("Location: /login.php");
}
