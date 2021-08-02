<?php
    $str = 'rayy@example.com';
    $str1 = explode("@",$str);
    $newStr = $str1[0];
    echo "Sample String : $str<br>";
    echo "Expected Output : $newStr";
