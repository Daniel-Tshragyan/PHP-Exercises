<?php


function columns($uarr) {
    $n=$uarr;
    if (count($n) == 0)
       return array();
    else if (count($n) == 1)
       return array_chunk($n[0], 1);
    array_unshift($uarr, NULL);
    $transpose = call_user_func_array('array_map', $uarr);
    return array_map('array_filter', $transpose);
 }
  
 function bead_sort($uarr) {
    foreach ($uarr as $e)
    $poles []= array_fill(0, $e, 1);
    return array_map('count', columns(columns($poles)));
 }

 $array = [5,3,1,3,8,7,4,1,1,3];

echo "Input array :";
print_r($array);
echo "<br>";
$sorted = bead_sort($array);
echo "Expected Result :";
print_r($sorted);


?>