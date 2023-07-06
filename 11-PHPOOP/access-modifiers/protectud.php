<?php
class Customer{
    protected $name = "Malsha";
    protected $address = "Kurunegala";

    protected function getData(){
        echo "Name: ".$this->name."<br>"."Address: ".$this->address;
    }
}

class Customer1 extends Customer {
    public function get(){
        $this->getData();
    }
}

/*$customer = new Customer();
$customer->getData();*/

$customer = new Customer1();
$customer->get();