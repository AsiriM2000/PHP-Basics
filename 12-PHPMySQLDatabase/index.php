<?php

//Connecting to the database
$db = new mysqli('localhost','root','','phpTest');

//Checking database
if ($db->connect_errno){
    echo "Database Connect Failed"."<br>";
}else{
    echo "Database Connect Successful"."<br>";
}

//Insert Data Database
/*$query = "insert into Customer values(1,'Asiri','Kandy')";
$query = "insert into Customer values(2,'Malsha','Kurunegala')";
$query = "insert into Customer values(3,'Pathum','Panadura')";
$query = "insert into Customer values(4,'Kamal','Colombo')";
$query = "insert into Customer values(5,'Nimal','Kelaiya')";
$result_set = mysqli_query($db,$query);

if ($result_set){
    echo "Customer Save Success"."<br>";
}else{
    echo "Customer Save Failed"."<br>";
}*/

//Select Data From Database
$query = "select * from Customer";
$result_set = mysqli_query($db,$query);

if ($result_set){
    while ($result = $result_set->fetch_assoc()){
        echo $result['Id']." - ".$result['Name']." - ".$result['Address']."<br>";
    }
}else{
    echo "Query Failed"."<br>";
}

//Delete Data From Database
/*$query = "delete from Customer where id = 5";
$result_set = mysqli_query($db,$query);

if ($result_set){
    echo "Customer Delete Success"."<br>";
}else{
    echo "Customer Delete Failed"."<br>";
}*/


//Update Data From Database
/*$query = "update Customer set name='Asiri',address='Kandy' where id=1";
$result_set = $db->query($query);
//$result_set = mysqli_query($db,$query);

if ($result_set){
    echo "Customer Update Success"."<br>";
}else{
    echo "Customer Update Failed"."<br>";
}*/