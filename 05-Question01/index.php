<!--01.display your name using PHP in aPHP document in the following place(in the title)-->
<!--02.create a simple HTML form and accept the user name and display the name through PH{ echo statement-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Questions"?></title>
</head>
<body>
    <form method="GET">
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form>

<?php
    $username = $_GET['username'];
    echo $username;
?>
</body>
</html>