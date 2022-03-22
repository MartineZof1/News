<?php
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	if ($name =='' || $email == '' || $subject =='' || $message =='') {
		echo 'Заполните все поля';
		exit;
	}
	// Send
	$subject = "=?utf-8".base64_encode($subject)."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("test@mail.ru", $subject, $message, $headers))
		echo "Сообщение отправлено";
	else 
		echo "Сообщение не отправлено";
?>
