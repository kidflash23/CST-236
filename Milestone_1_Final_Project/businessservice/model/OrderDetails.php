<?php
class OrderDetails{
    private $id;
    private $Quantity;
    private $current_description;
    private $current_price;
    
    function __construct($id, $Quantity, $current_description, $current_price){
        $this->id = $id;
        $this->Quantity = $Quantity;
        $this->current_description = $current_description;
        $this->current_price = $current_price;
        
    }
    //On this step, we see that the getter  methods are established for the given variables. 
        public function getid()
        {
            return $this->id;
        } 


    public function getQuantity()
    {
        return $this->Quantity;
        
    }

    
    public function getcurrent_description()
    {
        return $this->getcurrent_description;
        
    }
    
    
    public function getcurrent_price()
    {
        return $this->getcurrent_price;
        
    }
    
    
//On this step, we see that the setter methods are established for the given variables.
public function setid()
{
    return $this->id;
}


public function setQuantity()
{
    return $this->Quantity;
    
}


public function setcurrent_description()
{
    return $this->getcurrent_description;
    
}


public function setcurrent_price()
{
    return $this->getcurrent_price;
    
}



}
    
  ?>