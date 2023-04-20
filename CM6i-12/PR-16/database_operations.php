<?php
    $conn = mysqli_connect("localhost","root","","student");
    if ($conn != null) {
        echo "Data base connected sucessfully";
        $query="INSERT INTO studentinfo(rollno,na,class) VALUES    
       ('CO106','Shrisha','cm6i')";
       $result = $conn->query($query);
       if(!$result) die ("Database access failed".$conn->error);

    }
?>