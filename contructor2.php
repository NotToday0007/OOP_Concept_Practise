<?php 

class Person{

public $name;
public $age;

public function __construct($name,$age){
$this->name=$name;
$this->age=$age;
}

}

$person1=new Person();
$person1->name = "John";
$person1->age = 22;
echo "Name is: ".$person1->name." and age is:".$person1->age." years old.";