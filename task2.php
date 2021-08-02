<?php

$color = ['white', 'green', 'red'];
echo implode(",",$color);

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
        <li><?=
             $color[1]
        ?></li>
        <li><?=
             $color[2]
        ?></li>
        <li><?=
             $color[0]
        ?></li>
    </ul>
</body>
</html>