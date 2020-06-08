<?php
class OrderDetails{
    private $id;
    private $Notes;
    private $Date;

    
    function __construct($id, $Notes, $Date){
        $this->id = $id;
        $this->Notes = $Notes;
        $this->Date = $Date;        
    }
    //On this step, we see that the getter  methods are established for the given variables.
    public function getid()
    {
        return $this->id;
    }
    
    
    public function getNotes()
    {
        return $this->Notes;
        
    }
    
    
    public function getDate()
    {
        return $this->Date;
        
    }
    
    
    public function setid()
    {
        return $this->id;
    }
    
    
    public function setNotes()
    {
        return $this->Notes;
        
    }
    
    
    public function setDate()
    {
        return $this->Date;
        
    }
}
?>