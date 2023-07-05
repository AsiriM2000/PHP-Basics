<?php

class Name{
    public $fname;
    public $lname;

    public function __construct($fname, $lname){
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function setName(){
        echo "My Full Name is ".$this->fname." ".$this->lname;
    }
}
$myName = new Name("Asiri","Madhusanka");
$myName->setName();