<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    if(empty($_POST["name"]))
    {   	echo "Name can’t be blank <br>";  }

    if(!is_numeric($_POST["mbno"]))
    {  	echo "Enter valid mobile number<br>";  }

    $pattern="/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/";
    if(!preg_match($pattern,$_POST["email"]))
    {     Echo "Enter valid email id<br>";  }
    }
?>