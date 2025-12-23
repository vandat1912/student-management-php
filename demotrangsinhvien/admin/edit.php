<?php
require "../config/db.php";

if($_POST){
    $msv=$_POST['msv'];
    $name=$_POST['name'];
    $pass=$_POST['password'];

    $conn->query("INSERT INTO users(msv,name,password,role)
                  VALUES('$msv','$name','$pass','student')");
    header("Location: dashboard.php");
}
?>

<form method="post">
    MSV <input name="msv"><br>
    Tên <input name="name"><br>
    Mật khẩu <input name="password"><br>
    <button>Thêm</button>
</form>
