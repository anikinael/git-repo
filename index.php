<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">

	<?php include "menu.php"?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Добрый день.</b> Меня зовут <i>Елизавета Иовлева</i>. Я совсем недавно начала программировать, однако уже написала свой первый сайт. Свой путь я начну с изучения языка программирования - Python. Выбор пал именно на него, тк до этого опыта в программирование не было. Данный язык дает возможность выбора, тк используется во многих IT-сферах.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала: <br>
			<a href="index.php">Главная</a>
			<a href="puzzle.php">Загадки,</a>
			<a href="guess.php">Угадайка</a>
			<a href="guessFor2.php">Угадайка на двоих</a>
			<a href="pass-generator.php">Генератор пароля</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y")?> Lisa Iovleva
<div>


</body>
</html>