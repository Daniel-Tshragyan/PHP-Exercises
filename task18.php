<?php
$str = 'the quick brown fox jumps over the lazy dog';
$text =  preg_replace('/the/', 'That', $str, 1);

echo "Sample date : $str<br>";
echo "Expected Result : $text";



?>