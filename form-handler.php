<?php
$name = $_POST[''];
$visitor_email = $_POST[''];
$subject = $_POST[''];
$message = $_POST[''];

$email_from = 'cust@tookivi.com'
$email_subject='New form submission'
$email_body= "User name: $name.\n".
"User email: $visitor_email.\n".
"SUbject: $subject.\n".
"User Message: $message".\n 

%to = 'prithvi_1103@yahoo.in';

$headers="From:$email_from\n";
$headers="Reply to:$visitor_email\n";

mail( $to,$email_subject,$email_body,$headers  );

header("location : contact.html");


?>
