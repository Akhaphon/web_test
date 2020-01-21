<?php
include '../../model/mydb.php';
$itemID = $_POST['itemID'];
$itemName = $_POST['itemName'];
$itemAmount = $_POST['itemAmount'];

$sql = "UPDATE item SET itemID = '$itemID', itemName = '$itemName', itemAmount = '$itemAount'";

$db = new mydb("localhost", "webadmin", "1234", "mydb");
$db->updateData($sql);
?>