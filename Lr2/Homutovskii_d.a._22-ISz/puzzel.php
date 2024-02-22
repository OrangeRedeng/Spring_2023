<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента </title>
	<link rel="stylesheet" href="style.css">

</head>
<body>


<?php 
	include "menu.php"
?>
<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра в загадки</h1>
			<div class="box">
				
				<?php

					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					if($userAnswer == "сон" || $userAnswer == "сновидения"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer == "морской" || $userAnswer == "укус акулы"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer == "шахматный" || $userAnswer == "мертвый"){
						$score++;
					}

					echo "Вы угадали " . $score . " загадок";
				

				?>



				<form method="GET">
					<p> Что можно увидеть с закрытыми глазами?</p>
					<input type="text" name="userAnswer1">

					<p> Какой болезнью никто не болеет на суше?</p>
					<input type="text" name="userAnswer2">

					<p> Какой конь не ест овса?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>





			</div>
		</div>
	</div>
</div>


<div class="footer">
Copyright &copy; EvilGooby
</div>

</body>
</html>