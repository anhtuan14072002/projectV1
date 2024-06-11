<?php
session_start();
require_once("function/user.php");

$email = $_POST["email"];
$password = $_POST["password"];

//B1: select user by email
 $user = find_user_by_email($email);
 if($user == null){
    die("Email or password is not correct!");
 }

//B2: compare password
$verify =password_verify($password, $user["password"]); //true/false
if($verify){
    //user login successful
    $_SESSION["auth"] = $user;
    header("Location: /");
} else{
    die("Email or password is not correct");
}
