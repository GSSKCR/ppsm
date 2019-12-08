<?php     
$to_email = 'reddychaitanya.59@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: chaitanyareddy6688@gmail.com';
mail($to_email,$subject,$message,$headers);
echo "mail sent successfully";
?>