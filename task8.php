<?php

$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];
echo "a) ascending order sort by value<br>";
asort($arr);
foreach($arr as $k =>$v){
    echo $k." : ".$v."<br>";
}
echo "b) ascending order sort by Key<br>";
ksort($arr);
foreach($arr as $k =>$v){
    echo $k." : ".$v."<br>";
}
echo "c)descending order sorting by Value<br>";
arsort($arr);
foreach($arr as $k =>$v){
    echo $k." : ".$v."<br>";
}
echo "d)descending order sorting by Key<br>";
krsort($arr);
foreach($arr as $k =>$v){
    echo $k." : ".$v."<br>";
}



?>