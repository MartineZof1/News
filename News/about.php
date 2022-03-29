<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "О нас";
		require_once "blocks/head.php";
	?>
</head>
<body>
	<?php require_once "blocks/header.php"?>
	<div id="wrapper">
		<div id="leftCol">
			<img src="img/about.png" alt="О нас" title="О нас" style="margin-bottom: 10px">
			<div id="about_us">
				<h2 style="margin-bottom: 8px">О нас</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960.</p>
			</div>
		</div>
		<?php require_once "blocks/rightCol.php"?>	
	</div>

	<?php require_once "blocks/footer.php"?>
</body>
</html>