<?php 
class Animal
 {
    public $growth;
    protected $multicellular;
    protected $movement;
    private $consume_food;

    public function getGrowth()
    {
       return $this->growth;
    }	
   
    public function getMulticellular()
    {
      return $this->multicellular;
    }	
 
    public function getMovement()
    {
      return $this->movement;
    }	

    public function getConsumeFood()
    {
      return $this->consume_food;
    }	


    public function setGrowth($growth)
    {
       $this->growth = $growth;
    }	
   
    public function setMulticellular($cells)
    {
      $this->multicellular = $cells;
    }	
 
    public function setMovement($movement)
    {
      $this->movement = $movement;
    }	

    public function setConsumeFood($food)
    {
      $this->consume_food = $food;
    }	

	
	public function __toString()
    {
	   return "I am an animal.";
	}
 }