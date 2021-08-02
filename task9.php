<?php
$arr = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
sort($arr);
$text1 = "";
$text2 = "";

$sum = 0;

for($i = 0 ; $i<5;$i++){
    $sum +=$arr[$i];
    $text1.=$arr[$i].",";
}
for($i = count($arr) - 6 ; $i<count($arr);$i++){
    $sum +=$arr[$i];
    $text2.=$arr[$i].",";
}
$sum = $sum/10; 
echo "Average Temperature is : $sum <br> ";
echo "List of seven lowest temperatures : $text1 <br> ";
echo "List of seven highest temperatures : $text2";

?>