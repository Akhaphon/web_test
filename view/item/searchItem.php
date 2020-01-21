<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="searchItem.php" method="post">
        ID : <input type="text" name="id"><br>
        <input type="submit" value="ค้นหา">
    </form>
    <?php
    // include '../../controller/itemController/showItemController.php';
    include '../../controller/itemController/showItemController.php';
    showManyItem($_POST['id']);
    ?>
</body>

</html>