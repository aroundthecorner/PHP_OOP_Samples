<?php 
 require_once('dog.php');
 require_once('reptile.php');

  $a = new Animal();
  $m = new Mammal();
  $d = new Dog();
  $d->setHair("color brown");
  echo $d->getHair();
  var_dump($m instanceof Animal);
  var_dump($d instanceof Mammal);
  var_dump($d instanceof Animal);
  
  /*
Now based on the above example, In Object Oriented terms following are true:
	1. Animal is the superclass of Mammal class.
	2. Animal is the superclass of Reptile class.
	3. Mammal and Reptile are sub classes of Animal class.
	4. Dog is the subclass of both Mammal and Animal classes.
Now if we consider the IS-A relationship we can say:
	1. Mammal IS-A Animal
	2. Reptile IS-A Animal
	3. Dog IS-A Mammal
	4. Hence : Dog IS-A Animal as well
  */