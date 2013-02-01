<?php 
 require_once('animal.php');
 class Reptile extends Animal
 {
    private $cold_blooded;
	private $scales;
	private $tetrapods = "I have 4 limbs!";
	
    public function getColdBlooded()
    {
       return $this->cold_blooded;
    }	
	
    public function getScales()
    {
       return $this->scales;
    }	

    public function getTetrapods()
    {
       return $this->tetrapods;
    }	

    public function setColdBlooded($blood)
    {
       $this->cold_blooded = $blood;
    }	
	
    public function setScales($scales)
    {
       $this->scales = $scales; 
    }	

    public function setTetrapods($tetrapods)
    {
       $this->tetrapods = tetrapods;
    }	
	public function __toString()
    {
	   return "I am a reptile.";
	}	
 }