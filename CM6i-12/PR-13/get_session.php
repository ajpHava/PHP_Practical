<?php
session_start();
?>
<html>

<body>
    <?php
    //echo session variables that were set on previous page
    echo "User Name: " . $_SESSION["Name"];
    echo "<br>User Address: " . $_SESSION["Address"];
    ?>
</body>

</html>