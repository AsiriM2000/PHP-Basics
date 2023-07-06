<?php

class Employee{

    public $name;
    public $age;

    public function set_data($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name(){
        return $this->name;
    }
    public function get_age(){
        return $this->age;
    }
}

//$classes = get_declared_classes();
//echo "<pre>";
//print_r($classes);
//echo "<pre>";