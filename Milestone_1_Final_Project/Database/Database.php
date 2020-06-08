<?php
class Database{
    //This is the database file which lets us connect to the given database and files.
    private $dbservername = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "User_Database_Milestone_1";
    
    
    function getConnection(){
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname,8889); 
        
         
        if ($conn->connect_error){
            echo "Connection Failed" .$conn->connect_error . "<br>";
        }
        else{
            return $conn;
            
        }
    }
}