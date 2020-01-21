<?php
include '../../model/mydb.php';
$user = $_POST['user'];
$passwd = $_POST['passwd'];

$sql = "DELETE FROM profile WHERE user = '$user' and passwd = '$passwd'";

$db = new mydb("localhost", "webadmin", "1234", "mydb");
$db->deleteData($sql);
?>