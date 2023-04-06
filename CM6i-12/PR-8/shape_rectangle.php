<?php
    class shape{
        public $length;
    }
    class rectangle extends shape{
        public $width;
        function __construct($len,$wid){
            $this->length=$len;
            $this->width=$wid;
        }
        function display_properties(){
            echo "Length of rectangle :".$this->length;
            echo "\nWidth of reactangle: ".$this->width;
        }
        
    }
    $obj= new rectangle(4,4);
    $obj->display_properties();

?>