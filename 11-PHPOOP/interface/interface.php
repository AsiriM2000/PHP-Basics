<?php
interface Chat{
    public function chat();
}

 class Girl implements Chat{

    public function chat(){
        echo "girl chat boy";
    }

}

class Boy extends Girl{

}

$boy = new Boy();
$boy->chat();