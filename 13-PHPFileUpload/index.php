<?php
    if (isset($_POST['submit'])){
//        echo "<pre>";
//            print_r($_FILES);
//        echo "</pre>";
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_name = $_FILES['image']['tmp_name'];

        $upload_to = 'images/';

        $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload/Load</title>

    <style>
        .container{
            width: 900px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Image Upload</h1>
        <h3>Choose an image Click upload Image</h3>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <button type="submit" name="submit">Upload</button>
        </form>

        <?php
            if ($file_uploaded){
                echo "<h1>Uploaded File</h1>";
                echo '<img src="'. $upload_to . $file_name . '">';
            }
        ?>
    </div>
</body>
</html>
