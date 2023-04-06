<?php 
function addNum( ){
    $num1 = readline("Enter 1st number: ");
    $num2 = readline("Enter 2nd number: ");
    $result = $num1 + $num2 ;
    echo "The addition of ", $num1," + ",$num2," = ",$result;
}
addNum();
?>