<?php
$name = $_Post['name'];
$visitor_email = $_Post['email'];
$subject = $_Post['subject'];
$message = $_Post['message'];
$email_from = 'info@yourwebsite.com';
$email_subject = 'New form submission'
$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "subject: $subject.\n".
              "User Message: $message .\n";

$to = 'udhayakarthik890@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>