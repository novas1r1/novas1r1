<?php
$toemail='verry@zetcad.de';
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$msg = $_POST['inputMessage'];

$subject = 'Message from verena-zaiser.de';

$headers = "From: mail@verena-zaiser.de \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<b>Name :</b>".$name."<br>";
$message .='<b>Email :</b>'.$email."<br>";
$message .='<b>Message :</b>'.$msg;
mail($toemail, $subject, $message, $headers);
header('Location: ../#page-contact');
//echo "Thanks for contacting us!";
?>
