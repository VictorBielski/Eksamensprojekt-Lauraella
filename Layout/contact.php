<?php

	$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
	$message = $_POST['message'];


	$email_from = $email;
	
	$email_subject = "New form Submission";

	$email_body = "Navn: $name.\n".
        "Email: $email.\n".
        "Emne: $subject.\n".
		"Besked: $message.\n";

	$to = "sd@stefandimitrijevic.dk";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: index.php");