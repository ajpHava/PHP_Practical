<?php
    class Rectangle{
        public $length;
        public $breadth;
        function __construct($length,$breadth){
            $this->length = $length;
            $this->breadth = $breadth;
        }
        public function area_of_rectangle(){
            echo "Area of Rectangle : ". $this->length * $this->breadth;
        }
        public function perimeter_of_rectangle(){
            echo "Perimeter of Rectangle : ".$this->length*2 + $this->breadth*2;
        }
    }
    $obj = new Rectangle(4,2);
    $obj->area_of_rectangle();
    $obj->perimeter_of_rectangle();
?>