<?php 
function addNum($num1,$num2){
    $result = $num1 + $num2 ;
    echo "The addition of ", $num1," + ",$num2," = ",$result;
}
addNum(readline("Enter number 1 : "),readline("Enter number 2 : "));
?>