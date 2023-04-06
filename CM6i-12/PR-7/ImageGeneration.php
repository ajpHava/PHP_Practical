<?php
    header("Content-type:image/png");
    $image = imagecreate(500,500);
    imagecolorallocate($image,0,112,192);
    $textColor = imagecolorallocate($image,0,0,0);

    imagestring($image,5,5,18,"Image Ban Gaya",$textColor);
    
    imagepng($image);
?>