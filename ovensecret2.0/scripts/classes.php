<?php
if (isset($_POST['subscribe'])) {
	$to = 'veronicaiweanya@gmail.com';
	$subject = 'Oven Secret Online Tutorials Subscription';
	$message = 'Email: ' . $_POST['Email'];
	$email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL);
	if ($email){
		$headers .= "\r\nReply-To: $email";
	}
	$headers = "From: myovensecret@gmail.com\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	$success = mail($to, $subject, $message, $headers);
	echo $message;
}
?>
