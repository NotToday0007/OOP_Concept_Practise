<?php 

class Aminal{
    public $eat;

    public function makeSound(){
        echo "Animal make some iteresting sound: \n";
    }
 

}


Class dog extends Aminal{

    public function makeSound(){
    echo" vau vau";
    }
}

class cat extends Aminal{

    public function makeSound()
    {
        echo "meo meo";
    }
}

function makeCall(Aminal $animal){
  $animal->makeSound();
}

$animal1= new Aminal;

$cat1= new cat;
$dog1= new dog;
makeCall($cat1);
makeCall($dog1);
