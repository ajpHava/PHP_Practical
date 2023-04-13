<?php
    $username = $_POST["user-name"];
    $gender = $_POST["gender"];
    echo "Your user name is : ".$username."<br>";
    echo "Your gender  is : ".$gender."<br>";
    echo "You selected following subjects <br>";
    if(isset($_POST["java"])){
        
        $lang1 = $_POST["java"];
        echo $lang1."<br>";
    }
    if(isset($_POST["php"])){
    
        $lang2 = $_POST["php"];
        echo $lang2."<br>";
        
    }
    if(isset($_POST["python"])){
        
        $lang3 = $_POST["python"];
        echo $lang3."<br>";
    }
    if(isset($_POST["c"])){
        
        $lang4 = $_POST["c"];
        echo $lang4."<br>";
    }
    
?>