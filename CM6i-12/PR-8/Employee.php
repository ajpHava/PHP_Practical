<?php
    class Employee{
        public $emp_id;
        public $emp_name;
        public $emp_designation;
         function __construct($id,$name,$designation){
            $this->emp_id = $id;
            $this->emp_name = $name;
            $this->emp_designation = $designation;
        }

        function __destruct(){
            echo "The Destructor Called: ".__CLASS__;
        }

    }
    $obj = new Employee(1001,'Shirisha','SDE-2');
?>