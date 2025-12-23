<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="box">
    <h2>Đăng nhập hệ thống</h2>
    <form action="auth/login.php" method="post">
        <input type="text" name="msv" placeholder="Mã sinh viên / giáo viên" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>
</div>

</body>
</html>
