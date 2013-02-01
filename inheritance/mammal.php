<?
require_once('animal.php');
class Mammal extends Animal
{
    private $warm_blooded;
	private $hair;
	private $mammary_gland;
	private $diaphragm;
	
    public function getWarmBlooded()
    {
       return $this->warm_blooded;
    }	
	
    public function getHair()
    {
       return $this->hair;
    }	

    public function getMammaryGland()
    {
       return $this->mammary_gland;
    }	


    public function getDiagphram()
    {
       return $this->diaphragm;
    }		

    public function setWarmBlooded($blood)
    {
       $this->warm_blooded = $blood;
    }	
	
    public function setHair($hair)
    {
       $this->hair = $hair;
    }	

    public function setMammaryGland($mammary)
    {
       $this->mammary_gland = $mammary;
    }	


    public function setDiagphram($diagphram)
    {
        $this->diaphragm = $diagphram;
    }		

	public function __toString()
    {
	   return "I am a mammal.";
	}
	
}