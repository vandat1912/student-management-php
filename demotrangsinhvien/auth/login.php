<?php
session_start();
require "../config/db.php";

$msv = $_POST['msv'] ?? '';
$password = $_POST['password'] ?? '';

$sql = "SELECT * FROM users WHERE msv = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $msv, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    $_SESSION['user'] = $user;

    if ($user['role'] === 'admin') {
        header("Location: ../admin/dashboard.php");
    } else {
        header("Location: ../student/dashboard.php");
    }
} else {
    echo "Sai tài khoản hoặc mật khẩu";
}
