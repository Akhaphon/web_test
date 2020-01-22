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
<!DOCType html>
<html>
        <head>
                <meta charset="utf-8">
        </head>
        <body>
                <a href="../../view/Home.php">หน้าหลัก</a>
        </body>
</html>