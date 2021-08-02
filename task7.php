<?php
    $arr = [1, 2, 3, 4, 5];
    $myrand = rand(0,count($arr)-1);

    echo "Original array :<br>";
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i];
    }
    array_splice( $arr,$myrand, 0, "$" );
    echo "<br>After inserting '$' the array is :<br>";
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i];
    }
?>