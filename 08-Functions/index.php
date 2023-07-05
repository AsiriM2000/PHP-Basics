<?php
    //Predefined Functions
    echo strlen("Hello world!")."<br>";// outputs 12
    echo str_word_count("Hello world!")."<br>"; // outputs 2
    echo strrev("Hello world!")."<br>"; // outputs !dlrow olleH
    echo str_replace("world", "Dolly", "Hello world!")."<br><br>"; // outputs Hello Dolly!

    //User Defined Functions
    function test($x)
    {
        echo "pars value is : ".$x;
    }

    test(10);
