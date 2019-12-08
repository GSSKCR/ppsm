<?php
$to = "chaitanyareddy6688@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: chaitanyareddy6688@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>