<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['messgae'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Subssion';

$email_body = "Username: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = '13760953764@163.com';
$headers = "From: $email_form \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to;$email_subject,$email_body,$headers);
header("Location: contact.html");
?>