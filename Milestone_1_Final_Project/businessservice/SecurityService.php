<?php
include 'header.php';
include 'autoLoader.php';

class SecurityService{
    
    private $password = "";
    private $username = "";
    
    function __construct($username, $password){
        
        $this->password = $password;
        $this->username = $username;
        
    }
    
    public function Authenticate(){
        if($this->password =="" || $this->username == "")
        {
            return false;
        }
        if($this->password == "password123" and $this->username == "ray")
        {
            return true;
        }
        else {
            return false;
        }
    }
    
}

?>