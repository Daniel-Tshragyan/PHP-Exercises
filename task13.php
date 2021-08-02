<?php
    $str = "hello  world";
    function firstUpper($str){
        $letter = strtoupper($str[0]);
        $str1 = ltrim($str, $str[0]);
        $str2 = $letter.$str1;
        return $str2;
    }
    echo $str."<br>";
    echo "a) transform a string all uppercase letters.<br>";
    echo strtoupper($str);
    echo "<br>";
    echo "b) transform a string all lowercase letters.<br>";
    echo strtolower($str);
    echo "<br>";
    echo "c) make a string's first character uppercase.<br>";
    echo firstUpper($str);
    echo "<br>";
    echo "d) make a string's first character of all the words uppercase.<br>";
    echo ucwords($str);
    echo "<br>";
