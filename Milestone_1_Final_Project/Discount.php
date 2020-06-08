<?php
require_once 'database.php';
//This is the given code for the discount. We see that it has multiple discounted values for a quarter and halh

class Discount
{
    private $promotion;
    private $amount;
    private $percent;
    private $used;
    
    
    public function __construct()
    {
        $this->promotion = $promotion;
        
    }
    
    public function discountCalcPercentageAmount($promotion){
        $this->promotion = $promotion;
        
        if($this->promotion == "Quarter"){
            $this->percent = .25;
            echo "Congrats! You have offically saved up to 25% off the given purchased item";
            return $this->percent;
            
        }
        
        elseif($this->promotion == "Fifty"){
            $this->percent = .50;
            echo "Congrats! You have offically saved up to 50% off the given purchased item";
            return $this->percent;
        }
        else{
            return 0;
        }
        
        
        
        
    }
    
    public function discountedCalculatedDollarAmount($promotion){
        $this->promotion = $promotion;
        
        if($this->promotion == "25"){
            $this->percent = 25;
            $this->used = true;
            echo "Congrats. You have saved a total of $25 off the given order";
            return $this->percent;
            
        }
        
        elseif($this->promotion == "50"){
            $this->percent = 50;
            $this->used = true;
            echo "Congrats. You have saved a total of $50 off the given order";
            return $this->percent;
        }
        else{
            $this->used = false;
            return 0;
        }
        
        
        
        
    }
    
    
    
    
    
    public function userOnlyUse(){
        $conn = new dataBase();
        
        if($this->used == true){
            $sql = "INSERT INTO coupon Used values .'$this->used'.  where users.ID = userID";
            if (mysqli_query($conn->getConnect(), $sql)) {
                $sql;
            } else {
                echo "Error updating record: " . mysqli_error($conn->getConnect());
            }
            mysqli_close($conn->getConnect());
        }
        
        else{
            $sql = "INSERT INTO coupon Used values .'$this->used'.  where users.ID = userID";
            if (mysqli_query($conn->getConnect(), $sql)) {
                
            } else {
                echo "Error updating record: " . mysqli_error($conn->getConnect());
            }
            mysqli_close($conn->getConnect());
        }
        
        
        
    }
    
}