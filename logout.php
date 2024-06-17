<?php 
function logout() {
    // Xóa tất cả dữ liệu của phiên
    session_unset();

    // Hủy phiên
    session_destroy();

    // Chuyển hướng người dùng về trang đăng nhập hoặc trang chủ
    header("Location: index.php");
    exit();
}
