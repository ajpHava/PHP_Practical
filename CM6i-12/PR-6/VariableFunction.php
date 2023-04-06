<?php 
$addition = function ($num1,$num2){
    $result = $num1 + $num2 ;
    return $result;
};
$result = $addition (15, 12);
echo "The addition is ".$result;
?>