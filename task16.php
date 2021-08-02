<?php
$str = 'rayy@example.com';
$num1 =  strrpos($str, "@");
$newStr = "";
for($i=0;$i<$num1;$i++){
    $newStr.=$str[$i];
}
echo "Sample String : $str<br>";
echo "Expected Output : $newStr"

?>