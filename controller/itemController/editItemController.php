<?php
include '../../model/mydb.php';
$user = $_POST['user'];
$passwd = $_POST['passwd'];

$newUser = $_POST['newUser'];
$newPasswd = $_POST['newPasswd'];

$sql = "UPDATE profile SET user = '$newUser', passwd = '$newPasswd'
        where user = '$user' AND passwd = '$passwd'";

$db = new mydb("localhost", "webadmin", "1234", "mydb");
$db->updateData($sql);
