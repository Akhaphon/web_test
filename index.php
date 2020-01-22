<?php
include 'model/mydb.php';
$conn = new mydb("localhost","webadmin","1234","mydb");
?>
<!DOCType html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>ระบบร้านค้าออนไลน์</h1>
<a href="./view/profile/Login.php">เข้าสู่ระบบ</a><br>
<a href="./view/profile/Register.php">สมัครสมาชิก</a>
<h1><a href="./view/home.php">เข้าสู่หน้าหลัก</a></h1>
</body>
</html>