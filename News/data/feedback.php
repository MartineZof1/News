<?php
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
	$message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

	$mysqli = new mysqli("localhost", "root", "", "news");
	$mysqli->query("INSERT INTO `feedback` (`name`, `email`, `subject`, `message`) VALUES('$name', '$email', '$subject', '$message')");

	$mysqli->close();

	header('Location: ../index2.php');

?>
j