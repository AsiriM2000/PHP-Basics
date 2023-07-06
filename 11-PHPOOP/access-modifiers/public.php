<?php
class Customer{
    public $name = "Asiri";
    public $address = "Kandy";

    public function getData(){
      echo "Name: ".$this->name."<br>"."Address: ".$this->address;
    }
}

$customer = new Customer();
$customer->getData();