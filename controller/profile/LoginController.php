<?php
include "../../model/mydb.php";

$db = new mydb("localhost","webadmin","1234","mydb");

$userName = $_POST["UserOrEmail"];
$passwd = $_POST["Password"];

$sqlCheckUser = "select count(name) from user where name = '$userName'";

$result = $db->selectData($sqlCheckUser);

?>