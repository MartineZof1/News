<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "Регистрация";
		require_once "blocks/head.php";
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script>
   $(document).ready (function () {
    $("#done").click (function () {
     $("#messageShow").hide ();
     var name = $("#name").val ();
     var login = $("#login").val ();
     var email = $("#email").val ();
     var pass = $("#pass").val ();
     var fail = "";
     if (name.length < 2) { 
     fail = "Имя не меньше 2 символов !";
     } else if (login.length < 5) {
       fail = "Логин меньше 5 символов !";
       }	else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {
      		fail = "Вы ввели неоректный E-mail !";
      		} else if (pass.length < 5) {
        	fail = "Пароль не менее 5 символов !";
        	}
     if (fail != "") {
      $('#messageShow').html (fail + "<div class='clear'><br></div>");
      $('#messageShow').show ();
      return false;
     }
    });
   });
   </script>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	<div id="wrapper">
		<div id="leftCol">
		<form action="data/check.php" method="post">
			<input type="text" placeholder="Имя и Фамилия" id="name" name="name"><br>
			<input type="text" placeholder="Логин" id="login" name="login"><br>
   			<input type="text" placeholder="E-mail" id="email" name="email"><br>
   			<input type="password" placeholder="Пароль" id="pass" name="pass"><br>
    		<div id="messageShow"></div>
    		<input class="btn btn-success" type="submit" name="done" id="done" value="Зарегистрироваться">	
	</div>
		<?php require_once "blocks/rightCol.php"?>

	</div>
	<?php require_once "blocks/footer.php"?>
</body>
</html>