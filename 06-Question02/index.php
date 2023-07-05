<!--Question 01:-->
<!--$variable = 'Asiri Madhusanka'.-->
<!--Put this variable into the title section, h1 tag, and as an anchor text within an HTML document.-->
<!---->
<!--Question 02:-->
<!--create a variable called "my_name" and assign your name as the value and then print this. "My name is YOUR NAME"  in the browser.-->
<!--After that, change the value of the variable as your second name and print your second name again. The final output should look like this.-->
<!--"My name is YOUR FIRST NAME"-->
<!--“My name is YOUR SECOND NAME"-->
<!---->
<!--Question 03:-->
<!--Create two variables called “var1” and ”var2”;-->
<!--Assign two strings to them.-->
<!--Create a third variable called “var3” and assign the sum of var1 and var2;-->
<!--Output it in the browser.-->
<?php
    //Question 01
    $variable = "Asiri Madhusanka";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $variable; ?></title>
</head>
<body>
    <h1><?php echo $variable?></h1>
    <a href="#"><?php echo $variable?></a>
    <br>
    <br>
<?php
    //Question 02
    $my_name = "Asiri";
    echo "My Name is ".$my_name."<br>";
    $my_name = "Madhusanka";
    echo "My Name is ".$my_name."<br><br>";

    //Question 03
    $var1 = "Asiri ";
    $var2 = "Madhusanka";
    $var3 = $var1.$var2;
    echo $var3;
?>
</body>
</html>
