<?php
include '../../model/mydb.php';

    function showManyItem(){
        $db = new mydb("localhost", "webadmin", "1234", "mydb");

        $con = $db->getCon();
        $sql = "SELECT itemID, itemName, itemAmount FROM item";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            echo "<table><tr><th>ID</th><th>Name</th><th>amount</th></tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['itemID']. "</td><td>".$row['itemName'] ."</td><td>". $row['itemAmount']."</td></tr>";
            }
            echo "</table>";
        }else{
            echo "0 result";
        }
        $con->close();
    }

    function showOneItem($id){
        $db = new mydb("localhost", "webadmin", "1234", "mydb");

        $con = $db->getCon();
        $sql = "SELECT itemID, itemName, itemAmount FROM item WHERE itemID = '$id'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Name</th><th>amount</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['itemID'] . "</td><td>" . $row['itemName'] . "</td><td>" . $row['itemAmount'] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
        $con->close();
    }

