<?php
include 'conect.php';

if (isset($_GET['deleteEmail'])){
    $email = $_GET['deleteEmail'];

    $query = "delete from Customer where email='$email'";
    $result = mysqli_query($con,$query);

    if ($result){
        header('location:view.php');
        echo 'Delete Data Success!';
    }else{
        die(mysqli_query($con));
    }
}