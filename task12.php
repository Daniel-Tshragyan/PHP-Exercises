<?php

    $Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];
    echo "Values are in lower case.<br>";
    foreach($Color as $k=>$v){
        $Color[$k] = strtolower($Color[$k]);
    }
    print_r($Color);
    echo "<br>Values are in upper  case.<br>";
    foreach($Color as $k=>$v){
        $Color[$k] = strtoupper($Color[$k]);
    }
    print_r($Color);

?>