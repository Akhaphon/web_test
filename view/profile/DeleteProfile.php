<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    ลบข้อมูลสมาชิก<br>
    <form action="../../controller/profileController/DeleteProfileController.php" method="post">
        ชื่อผู้ใช้: <input type="text" name="user"><br>
        ระหัสผ่าน: <input type="text" name="passwd"><br>
        <input type="submit" value="ลบ">
    </form>
</body>

</html>