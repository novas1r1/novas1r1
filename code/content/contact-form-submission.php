<?php

$name = $_GET['inputName'];
$email = $_GET['inputEmail'];
$msg = $_GET['inputMessage'];

$errors = array();

if(empty($name)) {
	$errors[] = 'Please enter your name!';
}

if(empty($email)) {
	$errors[] = 'Please enter your email!';
}

if( empty($msg)) {
	$errors[] = 'Please enter your message!';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'Please enter a valid email address!';
}

if($errors) {
	$responseTitle = 'Sorry, something went wrong! Please try again..';
	$responseText = implode('<br>', $errors);
} else {
	$responseTitle = 'Message successfully sent :)!';
	$responseText = 'Thanks for your message! I\'ll reply as soon as possible :)';

	$headers = "From: mail@verena-zaiser.de \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = "<b>Name :</b>".$name."<br>";
	$message .='<b>Email :</b>'.$email."<br>";
	$message .='<b>Message :</b>'.$msg;

	$subject = 'Message from verena-zaiser.de';
	$toemail='verry@zetcad.de';

	mail($toemail, $subject, $message, $headers);
}

echo '<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title"> ' . $responseTitle . '</h4>
</div>
<div class="modal-body">
      ' . $responseText . '</div>';

?>
