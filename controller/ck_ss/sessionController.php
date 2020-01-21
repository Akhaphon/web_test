<?php
class sessionController{
    
    function __construct()
    {
        session_start();
    }

    function addSession($varialble, $data){
        $_SESSION["$varialble"] = "$data";
    }

    function moSession($varialble, $data){
        $_SESSION["$varialble"] = "$data";
    }

    function desSession(){
        session_unset();
        session_destroy();
    }
}

?>
