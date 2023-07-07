<?php
include 'conect.php';
$email = $_GET['updateEmail'];

$query =  $query = "select * from Customer where email='$email'";
$result_set = mysqli_query($con,$query);
$row = $result_set->fetch_assoc();

    $name = $row['Name'];
    $email = $row['Email'];
    $mobile = $row['Mobile'];
    $salary = $row['Salary'];

if (isset($_POST['submit'])){

    $nameP = $_POST['name'];
    $emailP = $_POST['email'];
    $mobileP = $_POST['mobile'];
    $salaryP = $_POST['salary'];

    $updateQuery = "update Customer set name='$nameP',email='$emailP',mobile='$mobileP', salary='$salaryP' where email='$email'";
    $result = mysqli_query($con,$updateQuery);

    if ($query){
        header('location:view.php');
        echo 'Data Update Success!';
    }else{
        die(mysqli_query($con));
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP Crud</title>

    <style>
        .container{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $name?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $email?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value="<?php echo $mobile?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Salary</label>
            <input type="text" class="form-control" placeholder="Enter Salary" name="salary" value="<?php echo $salary?>">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</div>

</body>
</html>