<!-- write a PHP program for introspection (check object characteristics such as its
name, parent class, classes, interfaces -->
<?php   
    interface sample{
        public function display();
    }
    class A implements sample{
        public function display(){
            echo "Interface implemented";
        }
    }
    class B extends A{
        function disp(){
            echo "In class B";
        }
    }
    $obj = new B();
    if (class_exists(get_class($obj))){
        echo "Class ".get_class($obj)." exists";
    }
    if (get_parent_class($obj)){
        echo "Parent Class Name : ".get_parent_class($obj);
    }
    if (get_declared_classes()) {
        print_r (get_declared_classes());
    }
    if (get_declared_interfaces()){
        print_r(get_declared_interfaces());
    }
?>