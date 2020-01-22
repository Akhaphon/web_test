<?php
class mydb{
    private $servername;
    private $user;
    private $passwd;
    private $dbname = null;

    private $conn;
    
    function __construct($servername, $user, $passwd,$dbname){
        $this->sername = $servername;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->dbname = $dbname;
        
        $this->conn = new mysqli($this->servername,$this->user,$this->passwd,$this->dbname);

        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo "Connected successfully";
    }

    function create($sql){
        if($this->conn->query($sql) === TRUE){
            echo "table is created";
        }else{
            echo "Error creating table : "  . $this->conn->error;
        }
    }

    function insertDB($sql){
        if(mysqli_query($this->conn,$sql)){
            echo "Insert new recoed.";
        }else{
            echo "Error "  . $sql . mysqli_error($this->conn);
        }

        mysqli_close($this->conn);
    }

    function selectData($sql){
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row["id"] . " " . $row["user"] . $row["email"] . "<br>" ;
            }
        }else{
            // echo " results";
            echo "is null";
        }
        $this->conn->close();
    }

    function login($sql){
        $result = $this->conn->query($sql);
        $objResult = $result->fetch_array(MYSQLI_NUM);
        if(!$objResult){
            echo "usrname name and password Incorrect!";
        }else{
            $_SESSION["userID"] = $objResult["id"];
            $_SESSION["passwd"] = $objResult["passwd"];

            session_write_close();
        }
        $this->conn->close();
    }

    function deleteData($sql){
        if($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record:  : "  . $this->conn->error;
        }
        $this->conn->close();
    }

    function updateData($sql){
        if ($this->conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updsating record:  : "  . $this->conn->error;
        }
        $this->conn->close();
    }

    function getCon(){
        return $this->conn;
    }

}
?>