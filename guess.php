<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Игра угадайка</title>
<link rel="stylesheet" href="style.css"> 
<script type="text/javascript">

	var answer = parseInt(Math.random() * 100);
	var isStart = false;
	const totalTrys = 5; 
	var currTrysCount = 0;



	function readInt(){

		let res = +document.getElementById("userAnswer").value;
		document.getElementById("userAnswer").value = "";
		return res;
	}

	function writeElem(text, id){
		document.getElementById(id).innerHTML = text;
	}

	function OnOffElement(id, isHide){
		if (isHide) {
			document.getElementById(id).style.display = "none";
		} else {
			document.getElementById(id).style.display = "inline";
		}
	}

	function checkAnswerAndTryCount(uanswer){
		currTrysCount++;
		if((totalTrys - currTrysCount) == 0){
			writeElem("Увы, Вы проиграли! У вас закончились попытки", "brief");
			OnOffElement("userAnswer", true);
			writeElem("Начать сначала", "button");
			isStart = false;
		} else {

			writeElem("Вы ввели слишком " + ((uanswer > answer) ? "большое" : "маленькое") + " число. Осталось попыток " +  (totalTrys - currTrysCount), "brief");
		}
	}

	function guess(){
		
		if (!isStart){
			writeElem("Угадайте число от 0 до 100", "brief");
			writeElem("Ответить", "button");
			OnOffElement("userAnswer", false);
			isStart = true;
			currTrysCount = 0;
		} else {
			var userAnswer = readInt();

			if(userAnswer == answer){
				writeElem("Поздравляю, Вы победили!", "brief");
				OnOffElement("userAnswer", true);
				writeElem("Начать сначала", "button");
				isStart = false;
			} else {
				checkAnswerAndTryCount(userAnswer);
			}
			
		}
	}

</script>
</head>
<body>

<div class="content">
	<?php include "menu.php"?>

	<div class="contentWrap">
		<div class="content">
			<div class="center">

				<h1>Игра угадайка</h1>

				<div class="box">

					<p id="brief">Угадайте число от 0 до 100</p>

					<input type="text" id="userAnswer">
					<br>
					<a href="#" onClick="guess()" id="button">Начать</a>				
				</div>

			</div>
		</div>
	</div>
	</div>
	<?php include "footer.php"?>
</body>
<script type="text/javascript">		
	document.getElementById("userAnswer").style.display = "none";
</script>
</html>