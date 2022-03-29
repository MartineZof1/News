<?php
	require_once "blocks/head.php";
?>
<header>

	<div id="logo">
		<a href="index2.php" title="На главную"><span>Н</span>овости ц."<span>С</span>лово <span>Б</span>ожье"</a>
	</div>
	<div id="menuHead">
		<a href="index2.php">
				<div style="margin-right: 5%"> Главная </div>
		</a>
		<a href="about2.php">
				<div style="margin-right: 5%">О нас</div>
		</a>
		<a href="news2.php">
				<div style="margin-right: 5%">Новости</div>
		</a>
		<a href="feedback.php">
				<div>Связаться с нами</div>
		</a>		
	</div>
	<div id="regAuth">
		<a href="data/exit.php">
			<div style="margin-left: 3%">Выход</div>
		</a>	
	<?php
		if($_COOKIE['user'] == ''):
	?>
	<?php else: ?>
		<p><?=$_COOKIE['user']?></p>
	<?php endif; ?>
	
	</div>
</header>