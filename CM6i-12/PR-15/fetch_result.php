<?php
    $conn = mysqli_connect("localhost","root","","student");
    if($conn->connect_error) die($conn->connect_error);
    $query="SELECT * FROM studentinfo";
    $result=$conn->query($query);
    if(!$result) die("Database access failed".$conn->error);
    
    $rows=$result->num_rows;
    echo"<table border='1'><tr><th> Roll No.</th><th> 
                  Name</th><th> percentage</th></tr>";
     for($j=0;$j<$rows;++$j)
    {
    $result->data_seek($j);
    $row=$result->fetch_array(MYSQLI_NUM);
    echo"<tr>";
     for($k=0;$k<3;++$k)echo "<td> $row[$k]</td>";
     echo"</tr>";
    }
    echo"</table>";
    ?>
    
?>