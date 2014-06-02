<?php
require 'plugins/kint-0.9/Kint.class.php';

Kint::dump("jaaaaaaaaaaaaaaaaau");


$toemail='verry@zetcad.de';

$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$msg = $_POST['inputMessage'];

$subject = 'Message from verena-zaiser.de';


if($name != 'hallo') {
	$error .= 'Please enter your name!';
}

if(empty($email)) {
	$error .= 'Please enter your email!';
}

if( empty($msg)) {
	$error .= 'Please enter your message!';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error .= 'Please enter a valid email address!';
}


$headers = "From: mail@verena-zaiser.de \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<b>Name :</b>".$name."<br>";
$message .='<b>Email :</b>'.$email."<br>";
$message .='<b>Message :</b>'.$msg;


if(empty($error)) {
	mail($toemail, $subject, $message, $headers);
} else {
	Kint::dump($error);
}

?>
