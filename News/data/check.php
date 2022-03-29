<?php
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


	$pass = md5($pass."1n2e3w4s");


	$mysqli = new mysqli("localhost", "root", "", "news");
	$mysqli->query("INSERT INTO `users` (`name`, `login`, `email`, `pass`) VALUES('$name', '$login', '$email', '$pass')");

	$mysqli->close();

	header('Location: ../auth.php');

?>