<?php

    $string = "Hello, world!";

    // Convert the string to uppercase
    $uppercaseString = strtoupper($string);

    // Replace the comma with a semicolon
    $semicolonString = str_replace(",", ";", $uppercaseString);

    // Find the position of the exclamation mark
    $exclamationIndex = strpos($semicolonString, "!");

    // Get the substring before the exclamation mark
    $helloString = substr($semicolonString, 0, $exclamationIndex);

    // Print the result
    echo $helloString;

?>


