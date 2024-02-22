<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента </title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="content">
<?php
	include "menu.php";
 ?>

	<h1>Личный сайт студента</h1>

	<div class="center">
	<img src="img/p.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>, меня зовут <i>Данила</i>.
			Я совсем недавно начал программировать однако я уже написал свой первый сайт. </p>
			<p>в этом мне помогали <a href="https://vk.com/evilgooby"> evilgooby</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал:
				<a href="index.php">Главная</a>
				<a href="puzzel.php">Загадайка</a>
				<a href="guess.php">Угадайка</a>
			</p>
		</div>
	</div>
</div>


<div class="footer">
Copyright &copy; <?php echo date("Y");?> EvilGooby
</div>

</body>
</html>