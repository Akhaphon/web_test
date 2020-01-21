<?php
class cookieController{
    private $cookieName;
    private $cookieValue;
    private $time;


    function __construct($cookieName= null,$cookirValue = null,$time = null)
    {
        $this->cookieName = $cookieName;
        $this->cookieValue = $cookirValue;
        $this->time = time() + (86400 * 30); //1day
        setcookie($this->cookieName, $this->cookieValue, $this->time, "/");
    }


    public function cookieSet($cookieName,$cookieValue){
        $this->cookieName = $cookieName;
        $this->cookieValue = $cookieValue;

        setcookie($this->cookieName,$this->cookieValue, time() + (86400 * 30), "/");
    }

    public function checkCookie(){
        if(!isset($_COOKIE[$this->cookieName])){
            echo "Cookie named '" . $this->cookieName . "' is not set!";
        }else{
            echo "Cookie '" . $this->cookieName . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$this->cookieName];
        }
    }

    public function moCookie($cookieName,$cookieValue){
        new cookie($cookieName,$cookieValue);
    }

    public function deleteCookie($cookieName, $cookieValue = "",$time){
        $time = time() - 3600;
        new cookie($cookieName, $cookieValue ,$time);
        echo "Cookie is delete";
    }

    public function checkEnable($cookieName, $cookieValue){
        $time = time() + 3600;
        new cookie($cookieName, $cookieValue,$time);
        if(count($_COOKIE) > 0){
            echo "cookie are enable";
        }else{
            echo "cookie are disable";
        }
    }
}

?>