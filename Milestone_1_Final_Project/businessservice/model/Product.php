<?php

class Product{
    private $id;
    private $productName;
    private $description;
    private $price;
    
    function __construct($id, $productName, $description, $price){
        $this->id = $id;
        $this->productName = $productName;
        $this->description = $description;
        $this->price = $price;
    }
    public function getID()
    {
        return $this->id;
        
    }
    public function getproductName()
    {
        return $this->productName;
        
    }
    public function getdescription()
    {
        return $this->description;
        
    }
    public function getPrice()
    {
        return $this->price;
        
    }
    
    
    public function setID($id)
    {
        return $this->id;
        
    }
    
    public function setproductName($productName)
    {
        return $this->productName;
        
    }
    
    public function setdescription($description)
    {
        return $this->description;
        
    }
    
    public function setprice($price)
    {
        return $this->price;
        
    }
    
    
    
    
    
    
    
    
    
    
    
}