<?php 
 require_once('animal.php');
 class Fish extends Animal
 {
    private $gills;
	private $fins;
	private $water_dwelling;
	
    public function getGills()
    {
       return $this->gills;
    }	
	
    public function getFins()
    {
       return $this->fins;
    }	

    public function getWaterDwelling()
    {
       return $this->water_dwelling;
    }	

	public function setGills($gills)
    {
       $this->gills = $gills;
    }	
	
    public function setFins($fins)
    {
       $this->fins = $fins;
    }	

    public function setWaterDwelling($water)
    {
       $this->water_dwelling = $water;
    }	

	public function __toString()
    {
	   return "I am a fish.";
	}	
 }