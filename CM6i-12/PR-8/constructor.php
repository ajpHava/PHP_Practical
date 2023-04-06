<?php
 class Uppper {
    public $a=0;
    public $b=0;
    function __construct($num1,$num2){
        $this->a = $num1;
        $this->b=$num2;
        echo "Value of a :".$this->a;
        echo "Value of b :".$this->b;
    }
 }
    $obj = new Uppper(50,20);


?>