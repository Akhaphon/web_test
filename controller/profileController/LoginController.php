
<?php
include '../../model/mydb.php';
session_start();
$userName = $_POST["txtUsername"];
$passwd = $_POST["txtPassword"];

$db = new mydb("localhost", "webadmin", "1234", "mydb");
$sqlLogin = "SELECT * FROM profile WHERE user = '" . $userName . "' 
    and passwd = '" . $passwd . "'";

$db->login($sqlLogin);


?>