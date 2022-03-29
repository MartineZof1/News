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
     var login = $("#login").val ();
     var pass = $("#pass").val ();
     var fail = "";
      if (login.length < 5) {
       fail = "Логин меньше 5 символов !";
       }	else if (pass.length < 5) {
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
		<form action="data/auth.php" method="post">
   			<input type="text" placeholder="Логин" id="login" name="login"><br>
   			<input type="password" placeholder="Пароль" id="pass" name="pass"><br>
    		<div id="messageShow"></div>
    		<input class="btn btn-success" type="submit" name="done" id="done" value="Войти">	
	</div>
		<?php require_once "blocks/rightCol.php"?>

	</div>
	<?php require_once "blocks/footer.php"?>
</body>
</html>