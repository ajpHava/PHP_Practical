<?php
session_start();
?>
<html>

<body>
    <?php
    $_SESSION["Name"] = "Shrisha";
    $_SESSION["Address"] = "Solapur";
    echo "Session variables are set";
    ?>
</body>

</html>