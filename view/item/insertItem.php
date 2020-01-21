<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    เพิ่มข้อมูลสินค้า<br>
    <form action="../controller/itemController/insertItemController.php" method="post">
        ชื่อสินค้า: <input type="text" name="itemName"><br>
        จำนวน: <input type="text" name="itemAmount"><br>
        <input type="submit" value="ยืนยัน">
    </form>
</body>

</html>