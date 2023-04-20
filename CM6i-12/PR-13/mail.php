<?php
$to = "shirishagatti99@gmail.com";
$subject = "This is subject";
$message = "<p>This is HTML message</p>";
$header = "From:tusharkompa@gmail.com\r\n";
$header .= "Cc:shirishagatti99@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type:text/html";
$retvalue =   mail($to, $subject, $message, $header);
if ($retvalue == true) {
    echo "Message sent successfully";
} else {
    echo "Message could not sent";
}
?>