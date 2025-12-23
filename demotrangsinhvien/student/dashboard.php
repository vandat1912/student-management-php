<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'student') {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sinh viên</title>
</head>
<body>
<h2>Trang sinh viên</h2>

<p>Xin chào: <?= $_SESSION['user']['name'] ?></p>
<p>Mã sinh viên: <?= $_SESSION['user']['msv'] ?></p>

<a href="../logout.php">Đăng xuất</a>
</body>
</html>
