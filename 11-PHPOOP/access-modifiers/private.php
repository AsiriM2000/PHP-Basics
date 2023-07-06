<?php
class Customer{
    private $name = "Malsha";
    private $address = "Kurunegala";

    private function getData(){
        echo "Name: ".$this->name."<br>"."Address: ".$this->address;
    }

}

//class Customer1 extends Customer {
//    public function get(){
//        $this->getData();
//    }
//}
//
//$customer = new Customer1();
//$customer->get();
