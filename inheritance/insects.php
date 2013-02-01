<?php 
 require_once('animal.php');
 class Insects extends Animal
 {
    private $metamorphosis;
	private $antennae;
	private $small_body_size;
	
    public function getMetamorphosis()
    {
       return $this->metamorphosis;
    }	
	
    public function getAntennae()
    {
       return $this->antennae;
    }	

    public function getSmallBodySize()
    {
       return $this->small_body_size;
    }	

    public function setMetamorphosis($metamorphosis)
    {
      $this->metamorphosis = $metamorphosis;
    }	
	
    public function setAntennae($antennae)
    {
       $this->antennae = $antennae;
    }	

    public function setSmallBodySize($small_body_size)
    {
       $this->small_body_size = $small_body_size;
    }	
	

	public function __toString()
    {
	   return "I am a fish.";
	}
 }