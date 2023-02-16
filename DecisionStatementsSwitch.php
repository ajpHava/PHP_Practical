<?php
    $marks = 76;
    switch ($marks) {
        case $marks>75:
            echo "You have got A grade";
        break;
        case $marks>60:
            echo "You have got B grade";
        break;
        case $marks>35:
            echo "You have got C grade";
        break;
        case $marks<35:
            echo "You have Failed in the exam";
        break;
        default:
            echo "Please enter proper marks";
            break;
    }
?>
