<?php

class User
{
    //properties
    private $first_Name;
    private $last_Name;
    private $role;
    private $username;
    private $password;
  
    
    /**
     * @return mixed
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param mixed $creditCard
     */
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }

    //constructor
  
  public function __construct($first_Name, $last_Name, $role, $username, $password)
    {
     $this->first_Name = $first_Name;
     $this->last_Name = $last_Name;
     $this->password = $password;
     $this->username = $username;
     $this->role = $role;
    
        
    }
   
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    //getter and setters methods for each  given property
    /**
     * @return mixed
     */
    public function getfirst_Name()
    {
        return $this->first_Name;
    }

    /**
     * @return mixed
     */
    public function getlast_Name()
    {
        return $this->last_Name;
    }

    /**
     * @return mixed
     */
    public function getrole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $first_Name
     */
    public function setfirst_Name($first_name)
    {
        $this->first_Name = $first_name;
    }

    /**
     * @param mixed $last_Name
     */
    public function setlast_Name($last_name)
    {
        $this->last_Name = last_name;
    }

    /**
     * @param mixed $role
     */
    public function setrole($role)
    {
        $this->role = $role;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

  
}

