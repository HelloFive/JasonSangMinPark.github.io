<html>
<body>
<?php

$to = "sm2park@gmail.com";
$subject = "Email Request!";
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers);
if ($sent) {
	print ('<a href="http://www.JasonSangMinPark.com/index.html"> Thank you for your interest.
	 Please click HERE to return to the homepage</a>');
} else {
	print "We encountered an error sending your mail";
}
?>