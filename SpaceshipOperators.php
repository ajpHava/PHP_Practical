<?php
    // If left operand  is greater then result is 1
    // If right operand  is greater then result is -1
    // If both are equal then result is 0
    $num1 = 11;
    $num2 = 12;
    echo ($num1<=>$num2);  //O/P : 1
    var_dump($num1>$num2);
    echo ($num1>$num2); // empty result.
?>