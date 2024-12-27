<?php 

abstract class vehicle{

abstract public function Move();

public function fuel(){
    echo " refueling";
}
}

class Car extends vehicle {


    public function Move(){
        echo"the car is ";
    }
    public function car1(){
        echo"runing in road\n";
    }
}
Class Plane extends vehicle{

public function Move(){
 echo"the plane ";
}
    public function Plane1(){
        echo "can fly in sky";
    }
}

$car= new Car;
$plane=new Plane;
$car->Move();
$car->car1();

$plane->Move();
$plane->Plane1();