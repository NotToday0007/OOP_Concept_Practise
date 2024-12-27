<?php 

class Person{
    private $name;
    private $age;

    public function setName($name){
    return $this->name=$name;
    }

    public function getName(){
    return $this->name;
    }
    public function setAge($age){
    return $this->age =$age;
    }
    public function getAge(){
    return $this->age;
    }
}

$person1= new Person();

$person1->setName("Yean");
$person1->setAge(12);

echo "My name is: ".$person1->getName()." and age is: " .$person1->getAge()." years old";

