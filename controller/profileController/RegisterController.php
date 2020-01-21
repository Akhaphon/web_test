<?php
include '../../model/mydb.php';

$user = $_POST['user'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

$db = new mydb("localhost", "webadmin", "1234", "mydb");

$sql = "insert into profile(user, email, passwd) 
        values('$user','$email','$passwd')";
$db->insertDB($sql);
?>