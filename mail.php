<?php

$sender_name = "My Website";
$sender_email = "delbertkip@gmail.com";
$recipient_email = "delbertkiki@gmail.com";
$subject = "Test Email";
$body = "This is a test email";
ini_set('smtp_port', '2525');

if (mail($recipient_email, $subject, $body, "From: $sender_name <$sender_email>")) {
    echo "Email sent successfully";
} else {
    echo "Email could not be sent";
}
