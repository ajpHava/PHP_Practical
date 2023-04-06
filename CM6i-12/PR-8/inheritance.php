
<?php
    class Upper{
        public $num = 10;
    }
    class lower extends Upper{
        public function demo(){
            echo "Value of num ".$this->num;
        }
    }
    $obj = new lower();
    $obj->demo();
?>