<!DOCTYPE html>
<html>
<head>
<?php include "meta.php"?>
<title>Игра в загадки</title>
<script type="text/javascript">

	var score = 0;

	function checkAnswer(inputId, answers){
		var userAnswer = document.getElementById(inputId).value;
		userAnswer = userAnswer.toLowerCase();
		for(var i = 0; i < answers.length; i++){
			if(userAnswer == answers[i]){
				score++;
				break;
			}
		}
	}
	
	function checkAnswers() {

		checkAnswer("userAnswer1", ["имя"]);
		checkAnswer("userAnswer2", ["владивосток"]);
		checkAnswer("userAnswer3", ["соль"]);

		alert("Вы отгадали " + score + " загадок");

	}

</script>
</head>
<body>

<div class="content">
	<?php include "menu.php"?>
	<div class="contentWrap">
		<div class="content">
			<div class="center">

				<h1>Игра в загадки</h1>
				<div class="box">
					<?php 
						
						$score = 0;
						mb_internal_encoding("UTF-8");
						if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"])){
							$userAnswer1=$_GET["userAnswer1"];
							$userAnswer2=$_GET["userAnswer2"];
							$userAnswer3=$_GET["userAnswer3"];

							$answer1 = "имя";
							$answer2 = "владивосток";
							$answer3 = "соль";
							
							$str = mb_strtolower($userAnswer1);
							if ($str == $answer1)
								$score++;
							$str = mb_strtolower($userAnswer2);
							if ($str == $answer2)
								$score++;
							$str = mb_strtolower($userAnswer3);
							if ($str == $answer3)
								$score++;
						}
					?>

					<form method="GET">
						<p>Что принадлежит каждому из вас, но другие этим пользуются чаще, чем вы?</p>
						<input type="text" name="userAnswer1">

						<p>В каком городе спрятались мужское имя и сторона света?</p>
						<input type="text" name="userAnswer2">

						<p>Какая нота и продукт называются одинаково?</p>
						<input type="text" name="userAnswer3">

						<br>
						<br>
						<br>
						<input type="submit" value="Ответить"/>
					</form>
					<?php 
						if ($score > 0)
						{
							$str_puzzle = "и";

							if ($score == 1)
								$str_puzzle = "у";
							echo "<p>Поздравляем вы отгадали $score загадк$str_puzzle</p>";
						}
					?>

				</div>

			</div>
		</div>
	</div>
</div>
<?php include "footer.php"?>


</body>
</html>