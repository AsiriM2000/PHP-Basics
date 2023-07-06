<?php
class Product{
    public $product_name;
    public $cost_price;
    public $sale_price;

    function cal_sale_price(){
        $this->sale_price = round($this->cost_price * 1.2,2);
    }
}

class Computer extends Product{
    public $processor;
    public $hard_disk;
    public $ram;
}

$computer = new Computer();

$computer->product_name = "Asus";
$computer->cost_price = 170000;
$computer->cal_sale_price();

$computer->processor = "Intel Core i3";
$computer->hard_disk = "256GB";
$computer->ram = "8GB";

$array = get_object_vars($computer);
echo "<pre>";
print_r($array);
echo "<pre>";