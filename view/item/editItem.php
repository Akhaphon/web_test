<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    แก้ไขข้อมูลสินค้า<br>
    <form action="../controller/itemController/editItemcontroller.php" method="post">
        ระหัสสินค้า: <input type="text" name="itemID"><br>
        ชื่อสินค้า: <input type="text" name="itemName"><br>
        จำนวน: <input type="text" name="itemAmount"><br>
        <input type="submit" value="แก้ไข">
    </form>
</body>

</html>