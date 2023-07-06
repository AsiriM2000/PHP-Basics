<?php
class Employee{

    public $name;
    public $age;

    public function set_data($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function get_name(){
        echo "Name: ".$this->name."<br>";
    }
    public function get_age(){
        echo "Age: ".$this->age;
    }
}

$employee = new Employee();
$employee->set_data("Asiri","22");
$employee->get_name();
$employee->get_age();