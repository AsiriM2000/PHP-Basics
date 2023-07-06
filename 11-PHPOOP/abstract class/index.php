<?php
abstract class Vehicle{
    abstract function park();
}

class Car extends Vehicle{

    function park(){
        echo "This is car parking...";
    }
}

class Van extends Vehicle{

    function park(){
        echo "This is van parking...";
    }
}

$vehicle = new Car();
$vehicle->park();
echo "<br>";
$vehicle = new Van();
$vehicle->park();