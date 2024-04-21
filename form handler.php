<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$subject = $_Post['subject'];
$message = $_Post['message'];


$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n";

$to = 'personalinfo@gmail.com';

$headers = "From : $email_form \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html.html")


?>