<?php
session_start();
require "../config/db.php";
if(!isset($_SESSION['user']) || $_SESSION['user']['role']!='admin'){
    header("Location: ../index.php");
}

$result = $conn->query("SELECT * FROM users WHERE role='student'");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container">
    <div class="top">
        <h2>Quản lý sinh viên</h2>
        <a class="btn btn-add" href="add.php">+ Thêm sinh viên</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>MSV</th>
            <th>Tên</th>
            <th>Hành động</th>
        </tr>

        <?php while($row=$result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['msv'] ?></td>
                <td><?= $row['name'] ?></td>
                <td>
                    <a class="btn btn-edit" href="edit.php?id=<?= $row['id'] ?>">Sửa</a>
                    <a class="btn btn-delete" href="delete.php?id=<?= $row['id'] ?>"
                       onclick="return confirm('Xóa sinh viên?')">Xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <br>
    <a href="../logout.php">Đăng xuất</a>
</div>

</body>
</html>
