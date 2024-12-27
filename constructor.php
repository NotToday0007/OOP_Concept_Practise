<?php 

class Person{

public $name;
public $age;

public function nameis($name){
return "name is: ".$this->name=$name;

}
public function ageis($age){
return ": and age is: ".$this->age=$age;
}
}

$person1=new Person;

// $person1->name='Rahat';
// $person1->age="19";

// echo $person1->nameis();
// echo $person1->ageis();

$person1->nameis("Rahat");
$person1->ageis(19);
echo "my name is: " .$person1->name. " and age is: ".$person1->age." year old.";