<?php

require_once 'Product.php';
require_once 'User.php';
require_once 'database.php';
//require_once 'orderProduct.php';

class Orders
{
    private $quanity;
    private $price;
    private $name;
   // private $Product = new Product();
    
    
    public function __construct()
    {}
    
    public function placeOrder($name, $price, $quanity){
       
    
        $this->name = $name;
        $this->price = $price;
        $this->quanity = $quanity;
    }
    
    
    public function placeOrder1(){
       $this->getPrice();
       $this->getProductName();
       $this->getquanityName();
    }
    
    
    public function savetogivenDB(){
        $db = new database();
        
        $this->savetoDetails($db->dbConnection());
        $this->savetoOrders($db->dbConnection());
    }
    
    public function savetoOrdersPage($conn){
        $date = date("l");
        $insert = "INSERT INTO ORDERS (Date) VALUES (.'$date'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "You have successfully added the  product to the order page";
            return 1;
        }
        catch(\Exception $e){
            echo "error .'$e'.";
            return 0;
        }
    }
    
    public function savetoOrderDetails($conn){
        
        $insert = "INSERT INTO ORDERDETAILS (Quantity, CurrentPrice, CURRENTDESCRIPTION) VALUES (.'$quanity'.,'$price'.,'$name'.)";
        
        try{
            $query = mysqli_query($dbConn->dbConnection(), $insert);
            echo "You have successfully added  the information to the ORDERDETAILS";
            return 1;
        }
        catch(\Exception $r){
            echo "error .'$r'.";
            return 0;
        }
    }
    
    public function getProductName(){
        $conn = new database();
        
        $query = "SELECT CurrentName FROM `ORDERDETAILS` where Orders_idOrders = 1";
        if(     $result = mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            
            return result;
        }
        else{
           return  0;
        }
        
    }
    
    public function getquanityName(){
        $conn = new database();
        
        $query = "SELECT Quantity FROM `ORDERDETAILS` where Orders_idOrders = 1";
        
        if( mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            return result;
        }
        else{
            
            return 0;
        }
   
        
        //return result;
    }
    
    public function getPrice(){
        $conn = new database();
        
        $query = "SELECT CURRENTPRICE FROM `ORDERDETAILS` where Orders_idOrders = 1";
        
        if( mysqli_query($conn->dbConnection(),$query)){
            $result = mysqli_query($conn->dbConnection(),$query);
            return result;
        }
        else{
            return 0;
        }
        
       // return result;
    }
    

    
    public function displayOrder(){
        $user = new User();
        
      
        $user->setFName("Zach");
        $date = date("m/d/Y");
        $firstName = $user->getFirstName();
        
        echo "$firstName has placed order on : .'$date'. <br> Your items: Product Name: $this->getProductName() 'Quantity:.' $this->getquanityName()'. Price .'$this->getPrice()'.";
        
        
    }
    
    public function displayOrder1(){
        $user = new \User();
        
        
        $user->setFName("Ray");
        $date = date("m/d/Y");
        $firstName = $user->getFirstName();
        
        echo "$firstName has now placed an order in : .'$date'. <br> Your items: Product Name: $this->name 'Quantity:.' $this->quanity'. Price .'$this->price'.";
    }
}
