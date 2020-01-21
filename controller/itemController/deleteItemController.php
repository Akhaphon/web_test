<?php
include "../../model/mydb.php";

$itemName = $_POST['itemName'];

$sql = "DELETE FROM item WHERE itemName = '$itemName'";

$db = new mydb("localhost", "webadmin", "1234", "mydb");
$db->deleteData($sql);
?>