<?php

$array1 = [array(77, 87), [23, 45]];
$array2 = ["w3resource", "com"];
$newArr = [];
function marged($arr){
    global $newArr;
    for($i = 0;$i<count($arr);$i++){
        if(is_array($arr[$i])){
            for($j = 0;$j<count($arr[$i]);$j++){
                array_push($newArr,$arr[$i][$j]);
            }
        }else{
            array_push($newArr,$arr[$i]);
        }
    }
}
marged($array1);
marged($array2);

echo "<pre>";
    print_r($newArr);
echo "</pre>";






?>