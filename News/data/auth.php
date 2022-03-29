<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass = md5($pass."1n2e3w4s");

	$mysqli = new mysqli("localhost", "root", "", "news");

	$result = $mysqli->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if(empty($user) or count($user) == 0) {
		header('Location: ../auth.php');
		exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");

	$mysqli->close();

	header('Location: ../index2.php');

?> 