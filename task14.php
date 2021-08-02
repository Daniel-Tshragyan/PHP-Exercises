<?php
    $str = 'The quick brown fox jumps over the lazy dog.';
    $specificString  = 'brown';
    echo "checking if $str Contains $specificString<br>";
    if(strpos($str, $specificString) !== false){
        echo 'true';
    }else{
        echo 'false';
    }

    



?>