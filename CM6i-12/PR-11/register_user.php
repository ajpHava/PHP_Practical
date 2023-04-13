<?php
    $username = $_POST["user-name"];
    $user_id = $_POST['hidden'];
    $gender = $_POST["gender"];
    echo "Your user name is : ".$username."<br>";
    echo "Your user ID is : ".$user_id."<br>";
    echo "Your gender  is : ".$gender."<br>";
    echo "You selected following subjects <br>";
    $subjects = $_POST['subjects'];
    for ($i=0; $i <count($subjects) ; $i++) { 
        echo $subjects[$i]."<br>";
    }
    
?>