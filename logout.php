<?php
session_start();

// Xoá tất cả các biến phiên làm việc
session_unset();

// Hủy phiên làm việc
session_destroy();

// Chuyển hướng về trang đăng nhập
header("Location: login.php");
exit();
?>
