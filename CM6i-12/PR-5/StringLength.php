<?php

use function PHPSTORM_META\override;

    $name = 'TusharKompa';
    // print('The length of '.$name.' string is : '.strlen($name));
    $length = 0;
    $i = 0;
    while ($name[$i] != ''){
        $length +=1;
        $i++;
    }
    echo "The length of the string  ".$name." is : ".$length;
    
?>