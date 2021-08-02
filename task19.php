<?php
    $str1 = 'football';
    $str2 = 'footboll';
    $diff = false;
    $index = 0;
    
    for($i = 0;$i<strlen($str1);$i++){
        if($str1[$i] !== $str2[$i]){
            $diff = true;
            $index = $i;
            break;
        }
    }
    echo "String1 : $str1<br>";
    echo "String2 : $str2<br>";
    if($diff){
        echo "Expected Result : First difference between two strings at position 5: $str1[$index] vs $str2[$index]";
    } else{
       echo "No difference";
    }
