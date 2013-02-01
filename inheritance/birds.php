<?php 
 require_once('animal.php');
 class Birds extends Animal
 {
    private $feather;
	private $bills;
	private $wings;
	
    public function getFeather()
    {
       return $this->feather;
    }	
	
    public function getBills()
    {
       return $this->bills;
    }	

    public function getWings()
    {
       return $this->wings;
    }	

    public function setFeather($feather)
    {
      $this->feather = $feather;
    }	
	
    public function setBills($bills)
    {
       $this->antennae = $bills;
    }	

    public function setWings($wings)
    {
       $this->wings = $wings;
    }	
	

	public function __toString()
    {
	   return "I am a bird.";
	}
 }