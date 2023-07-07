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
    <button type="button" class="btn btn-success" onclick="location='index.php'">Add Data</button>
    <table class="table">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Salary</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include 'conect.php';

        $query = "select * from Customer";
        $result_set = mysqli_query($con,$query);

        if ($result_set){
            while ($resultS = mysqli_fetch_assoc($result_set)){
                $name = $resultS['Name'];
                $email = $resultS['Email'];
                $mobile = $resultS['Mobile'];
                $salary = $resultS['Salary'];

                echo '<tr>
                           <td>'.$name.'</td>
                           <td>'.$email.'</td>
                           <td>'.$mobile.'</td>
                           <td>'.$salary.'</td>
                           <td>
                                <button type="button" class="btn btn-warning"><a class="text-light" href="update.php?updateEmail='.$email.'">Update</a></button>
                                <button type="button" class="btn btn-danger"><a class="text-light" href="delete.php?deleteEmail='.$email.'">Delete</a></button>
                           </td>
                       </tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>