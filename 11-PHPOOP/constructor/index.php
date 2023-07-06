<?php
class Fruit{
    var $name;
    var $color;

    public function __construct($name,$color){
        $this->name = $name;
        $this->color=$color;
    }

    function getName(){
        return $this->name;
    }
    function getColor(){
        return $this->color;
    }
}

$fruit = new Fruit("Mango","Green");
echo $fruit->getName();
echo "<br>";
echo $fruit->getColor();
