<?php
require_once("function/user.php");

$full_name = $_POST["full_name"];
$email = $_POST["email"];
$password = $_POST["password"];

// Validate input fields
if (empty($full_name)) {
    $_SESSION['full_name_error'] = "Full name is required!";
    header("Location: /register.php");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['email_error'] = "Invalid email format!";
    header("Location: /register.php");
    exit();
}

if (strlen($password) < 8) {
    $_SESSION['password_error'] = "Password must be at least 8 characters long!";
    header("Location: /register.php");
    exit();
}

// Check if the email is already taken
if (find_user_by_email($email) !== null) {
    $_SESSION['email_error'] = "Email is already registered!";
    header("Location: /register.php");
    exit();
}

$user_info = [
    "full_name" => $full_name,
    "email" => $email,
    "password" => $password,
];

if (create_user($user_info)) {
    header("Location: /login.php");
} else {
    $_SESSION['error'] = "Failed to create user!";
    header("Location: /register.php");
}
?>
