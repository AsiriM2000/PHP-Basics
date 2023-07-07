<?php

$con = new mysqli('localhost','root','','Store');

if ($con->connect_errno){
    echo "Database Connect Failed"."<br>";
}else{
    echo "Database Connect Successful"."<br>";
}
