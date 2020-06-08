<?php

require_once 'Database.php';

class UserDataService{
    function findByFirstName($n) {
        //This returns an array of persons 
        $db = new Database();
      
         
        $sql_query = "SELECT * FROM USERS WHERE FIRST_NAME LIKE '%$n%' OR LAST_NAME LIKE '%$n%'; ";
     
    $connection = $db->getConnection();
    
    $result = $connection->query($sql_query);
    
    
    if (!$result) {
        
        echo "There is an error within the SQL Statement";
        return null;
        exit;
    }
    
    
    if ($result->num_rows == 0) {
        return null;
        
    
    }
    else{
        
        //echo "I found " . $result->num_rows . " results!<br>";
        
       $person_array = array();
        
        while ($persons = $result->fetch_assoc()) {
            //print_r($person);
            //echo "<br>";
            
            
            array_push($person_array, $persons);
            
            
            //echo "Person id = " . $person['idUsers_table'] . " Name =  " . $person['FIRST_NAME'] .  " last name = " . $person['LAST_NAME'] . "<br>";
                  
        }
            return $person_array;
        
    }
    
    }


function findByLastName($n) {
    $db = new Database();
 
    $sql_query = "SELECT * FROM USERS WHERE LAST_NAME LIKE '%$n%' OR FIRST_NAME LIKE '%$n%'; ";
    
    $connection = $db->getConnection();
    
    $result = $connection->query($sql_query);
    
    
    if (!$result) {
        
        echo "There is an error within the SQL Statement";
        return null;
        exit;
    }
    
    
    if ($result->num_rows == 0) {
        return null;
        
        
    }
    else{
        
        
        $person_array = array();
        
        while ($persons = $result->fetch_assoc()) {
         
            
            
            array_push($person_array, $persons);
            
            
            
        }
        return $person_array;
        
    }
    
}











}
    