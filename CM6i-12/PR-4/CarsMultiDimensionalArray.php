<?php
    $cars = array(
        array("BMW",22,18),
        array("Ferrari",20,15),
        array("TATA",38,18),
        array("MAHINDRA",45,20),
    );
    echo "Cars Stocks Information\n";
    echo "Car : ". $cars[0][0]." Stocks : ". $cars[0][1]." Sold : ". $cars[0][2],"\n";
    echo "Car : ". $cars[1][0]." Stocks : ". $cars[1][1]." Sold : ". $cars[1][2],"\n";
    echo "Car : ". $cars[2][0]." Stocks : ". $cars[2][1]." Sold : ". $cars[2][2],"\n";
    echo "Car : ". $cars[3][0]." Stocks : ". $cars[3][1]." Sold : ". $cars[3][2];
    
?>