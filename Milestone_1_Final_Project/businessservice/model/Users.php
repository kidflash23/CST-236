<?php

class Users{
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $role;
    private $password;
    
    function __construct($id, $first_name, $last_name, $username, $role, $password){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->role = $role;
        $this->password = $password;
        
        
        
    }
    public function getID()
    {
        return $this->id;
        
    }
    public function getfirst_name()
    {
        return $this->first_name;
        
    }
    public function getlast_name()
    {
        return $this->last_name;
        
    }
    public function getusername()
    {
        return $this->username;
        
    }
    
   
    public function getrole()
    {
        return $this->role;
        
    }
    public function getpassword()
    {
        return $this->password;
        
    }
    
    
    
    
    
    public function setID($id)
    {
        return $this->id;
        
    }
    
    public function setfirst_name($first_name)
    {
        return $this->first_name;
        
    }
    
    public function setlast_name($last_name)
    {
        return $this->last_name;
        
    }
    
    public function setrole($role)
    {
        return $this->role;
        
    }
    
    
    public function setpassword($password)
    {
        return $this->password;
        
    }
      
    
    
    
}