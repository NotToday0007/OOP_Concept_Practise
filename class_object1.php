<?php  

class car{

public $brand;
public $color;


public function drive(){

    echo "The car brand is " .$this->brand. " and color is "  .$this->color.".";
}

}


$car1= new car();
$car1->brand='Toyota';
$car1->color='Red';

$car1->drive();