<?php
    // $name="Tushar";
    // $branch="CM";
    // $roll=12;
    // compact() : retunrns variable values into assosiative array.
    // $student=compact("name","branch","roll");
    // print($student["name"]);

    //implode() : join array elements with a string

    // $marks = array(50,60,91,51,26,16);
    // $marks_s = implode(":",$marks);
    // echo implode(":",$marks);
    // echo $marks_s;            
    
    //explode() : Split a string by a string

    $fastFood = ["Pizza ","Burger" ,"FrechFries" ,"Maggie", "Pasta", "Momos"];
    // $fastFoodArray = explode(" ",$fastFood,-1);
    // print_r($fastFoodArray);
    // echo "\n";
    // print_r(explode(" ",$fastFood,0));
    // echo "\n";
    // limit is set 3 i.e the string is splited into 3 elements and the 3rd element 
    //will contain all the rest elements.
    // print_r(explode(" ",$fastFood,3));

    //array_flip() : swaps the key and value i.e name=>Tushar then Tushar=>name

    // $courses = ["name"=>"Tushar","course"=>"CM","Roll_No"=>12];
    // print_r(array_flip($courses));

    //unset() : removes the value of variable

    // unset($courses["name"]);
    // print_r($courses);
   print_r(array_slice($courses,1));
   list($a,$b,$c)=$fastFood;
   echo "I have several fastfoods, $a, $b and $c.";
   ?>