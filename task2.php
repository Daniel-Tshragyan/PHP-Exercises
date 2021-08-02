<?php

$color = ['white', 'green', 'red'];

for($i=0;$i<count($color);$i++){
    if($i+1!=count($color)){
        echo $color[$i].",";
    }else{
        echo $color[$i];
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php
            echo $color[1]
        ?></li>
        <li><?php
            echo $color[2]
        ?></li>
        <li><?php
            echo $color[0]
        ?></li>
    </ul>
</body>
</html>