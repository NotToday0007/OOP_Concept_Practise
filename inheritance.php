<?php 
class Animal {

    public $name;
    public $eat;

    public function dog(){
        echo "the dog name is :" .$this->name." and eat: ".$this->eat."\n";
    }
}

Class People extends Animal{
    public $fatherName;

    public function __construct($name,$eat,$fatherName){
        echo "the man name is ".$this->name=$name." and eat ".$this->eat=$eat." and his father name is ".$this->fatherName=$fatherName;
    }

}


$rokyDog= new Animal();
$rokyDog->name="Roky";

$rokyDog->eat="meat";

$rokyDog->dog();

$people1=new People("Rafi","rice","Rahim");
