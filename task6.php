<?php
 

    $myarr = json_decode('{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}');
    
    foreach($myarr as $k => $v){
            if(is_object($myarr->$k)){
                foreach($myarr->$k as $a => $b){
                    echo $a." : ".$b;
                    echo "<br>";
                }
                
            }else{
                echo $k." : ".$v;
                echo "<br>";
            }
            
    }
   




?>