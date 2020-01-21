<?php
include '../../model/mydb.php';

$itemID = $_POST['itemID'];
$itemName = $_POST['itemName'];
$itemAmount = $_POST['itemAmount'];

$db = new mydb("localhost", "webadmin", "1234", "mydb");

$sql = "insert into item(itemName, itemAmount) 
        values('$itemName','$itemAmount')";
$db->insertDB($sql);

?>