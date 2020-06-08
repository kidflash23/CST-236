<?php

require_once 'UserDataService.php ';

class UserBusinessService{
    
    function findByFirstName($n){
        $persons = Array();
        
        
        $dbservice = new UserDataService();
        
        $persons = $dbservice->findByFirstName($n);
        
        
        return $persons;
    }
    
    
    
    function findByLastName($n){
        $persons = Array();
        
        
        $dbservice = new UserDataService();
        
        $persons = $dbservice->findByLasName($n);
        
        
        return $persons;
    }
    
}