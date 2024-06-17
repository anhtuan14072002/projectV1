<?php 
session_start(); // Bắt đầu phiên
function logout() {
    // die("fail");
    session_unset();
    session_destroy();
    if (isset($_SERVER['HTTP_REFERER'])) {
        $previousPage = $_SERVER['HTTP_REFERER'];
    } else {
        $previousPage = 'index.php';
    }

    header("Location: $previousPage");
}
logout();
