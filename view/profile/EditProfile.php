<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    แก้ไขข้อมูลสมาชิก<br>
    <form action="../../controller/profileController/EditProfileController.php" method="post">
        ชื่อผู้ใช้: <input type="text" name="user"><br>
        ระหัสผ่าน: <input type="text" name="passwd"><br>
        ชื่อผู้ใช้ใหม่: <input type="text" name="newUser"><br>
        ระหัสผ่านใหม่: <input type="text" name="newPasswd"><br>
        <input type="submit" value="แก้ไข">
    </form>
</body>

</html>