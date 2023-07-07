<?php
    include 'conect.php';
    if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $salary = $_POST['salary'];

        $query = "insert into Customer values ('$name','$email','$mobile','$salary')";

        $result = mysqli_query($con,$query);
        if ($query){
            echo 'Data Insert Success!';
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
                <input type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Salary</label>
                <input type="text" class="form-control" placeholder="Enter Salary" name="salary">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <button type="button" class="btn btn-success" onclick="location='view.php'">View Submit Data</button>
        </form>
    </div>

</body>
</html>