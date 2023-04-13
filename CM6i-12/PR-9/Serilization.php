<?php
    $s_data=serialize(array('Tushar','Mahanteshwar','Kompa'));
    print_r($s_data."<br>");
    $us_data=unserialize($s_data);
    print_r($us_data);
?>
