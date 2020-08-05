<?php


	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	$phone = $_POST['phone'];



	$email_from = 'MySite@sitemail.com'
	$email_subject = 'new message from portfolio site'
	$email_body = "User Name: $name.\n".
					"User_Email: $visitor_email.\n".
						"User_Message: $message.\n";


	$to = "s.sawmik.r@gmail.com";
	$headers = "From: $email_form \r\n";
	$headers .= "Replay-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html")



?>