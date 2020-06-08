<?php


require_once 'Database.php';

class ProductDataService{
    function findByProductName($n) {
        //This returns an array of persons
        $db = new Database();
        
        //testing
        //echo "testing the database database";
        //print_r($db);
        
        //e cho "I am searching for" . $n . "<br>";
        
        $sql_query = "SELECT * FROM PRODUCTS_Table WHERE PRODUCTNAME LIKE; '%$n%'; ";
        
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
            
            $products = array();
            
            while ($products = $result->fetch_assoc()) {
                //print_r($person);
                //echo "<br>";
                
                
                array_push($products, $products);
                
                
                //echo "Person id = " . $person['idUsers_table'] . " Name =  " . $person['FIRST_NAME'] .  " last name = " . $person['LAST_NAME'] . "<br>";
                
            }
            return $products;
            
        }
        
    }
    
    
    function findByDescription($n) {
        $db = new Database();
        
        //testing
        //echo "testing the database database";
        //print_r($db);
        
        //e cho "I am searching for" . $n . "<br>";
        
        $sql_query = "SELECT * FROM PRODUCTS WHERE DESCRIPTION LIKE '%$n%'; ";
        
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
            
            $products = array();
            
            while ($products = $result->fetch_assoc()) {
                //print_r($person);
                //echo "<br>";
                
                
                array_push($products, $products);
                
                
                
            }
            return $products;
            
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
}
