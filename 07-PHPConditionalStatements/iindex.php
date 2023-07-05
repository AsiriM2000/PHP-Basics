<?php
#if Statement
    $date = "Monday";
    if ($date === "Monday"){
        echo "Have a good day...!"."<br>";
    }
#if...else Statement
    $date = "Friday";
    if ($date === "Monday"){
        echo "Have a good day...!"."<br>";
    }else{
        echo "not happy...!"."<br>";
    }

#if...elseif...else Statement
    $date = "Friday";
    if ($date === "Monday"){
        echo "Have a good day...!"."<br>";
    }elseif ($date === "Friday"){
        echo "Very happy day...!"."<br>";
    }else{
        echo "Not happy...!"."<br>";
    }

#switch Statement
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!"."<br>";
            break;
        case "blue":
            echo "Your favorite color is blue!"."<br>";
            break;
        case "green":
            echo "Your favorite color is green!"."<br>";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!"."<br>";
    }