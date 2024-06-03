<?php
session_start();
require_once('db.php');

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    if (strpos($user, '@') === false) {
        $message = "Tên đăng nhập phải chứa ký tự '@'.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $user;
            $message = "Đăng nhập thành công!";
            header("refresh:2;url=product.php");
        } else {
            $message = "Sai tên đăng nhập hoặc mật khẩu.";
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<div class="container1">
        <h2>Đăng nhập</h2>
        <form method="post" action="">
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <button type="submit">Đăng nhập</button>
        </form>
        <?php
        if ($message != "") {
            echo "<p style='color:red;'>$message</p>";
        }
        ?>
        <p>Chưa có tài khoản? <a href="register.php">Đăng ký tại đây</a></p>
    </div>
</body>
</html>
