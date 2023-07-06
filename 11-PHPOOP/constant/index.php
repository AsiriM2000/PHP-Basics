<?php
class Employee{
    public const EPF_RATE = 0.08;
    public $salary = 25000;

    public function cal_EPF(){
        return $this->salary * self::EPF_RATE;
    }
}

$emp = new Employee();
echo "EPF RATE: ". Employee::EPF_RATE;

echo "<br>";
echo "SALARY: ".$emp->cal_EPF();