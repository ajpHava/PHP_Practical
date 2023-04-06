<?php
    $words = " My name is Atharva Balkrishna Lad ";
    $i = 0;
    $word_count = 0;
    if ($words[$i]==' ') {
        $word_count =0;
        $i++;
    }
    while ($words[$i]!=null) {
        
        if ($words[$i]==' ') {
            $word_count +=1;
        }
        $i+=1;
    }
    echo "The word count is ".$word_count;

?>