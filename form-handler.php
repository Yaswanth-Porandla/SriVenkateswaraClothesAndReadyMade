<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'file:///D:/HTML%20chapters/index.html';
$email_subject = 'new form submission';
$email_body = "User name: $name.\n".
              "User Email: $visitor_email.\n".
              "subject: $subject.\n".
              "User message: $message.\n";

$to = 'shivababy.p@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>