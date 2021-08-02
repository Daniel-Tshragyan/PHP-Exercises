<?php

$str = 'www.example.com/public_html/index.php';
$num1 =  strrpos($str, "/");
$numebr2  = $num1 +1 - strlen($str);
$newStr =  substr($str,  $numebr2);
echo "Sample String : $str<br>";
echo "Expected Output : $newStr"


?>