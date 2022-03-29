<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		require_once "functions/functions.php";
		$title = "Новости";
		$news = getNews (3, "");
		
	?>
</head>
<body>
	<?php require_once "blocks/header2.php"?>
	<div id="wrapper">
		<div id="leftCol">

		<?php
			for ($i = 0; $i < count($news); $i++) {
				if($i == 0)
					echo "<div id=\"bigArticle\">";
				else
					echo "<div class=\"article\">";
				echo '<img src="img/articles/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				<p>'.$news[$i]["full_text"].'</p>
				<a href="article.php?id='.$news[$i]["id"].'">
					<div class="more">Далее</div>
				</a>
			</div>';
			if($i == 0)
				echo "<div class=\"clear\"><br></div>";
			}	
		?>
	</div>
		<?php require_once "blocks/rightCol.php"?>

	</div>
	<?php require_once "blocks/footer.php"?>
</body>
</html>