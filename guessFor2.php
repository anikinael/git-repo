<!DOCTYPE html>
<html>
<head>
<?php include "meta.php"?>
<title>Угадайка на двоих</title>
<script type="text/javascript">

	var answer = parseInt(Math.random() * 100);
	var n_player = 0;
	var curr_player = "";
	var isStart = false;

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

	function guess(){
		curr_player = (n_player % 2) == 0 ? "Игрок 1" : "Игрок 2";
		
		if (!isStart){
			writeElem(curr_player, "currPlayer");
			writeElem("Угадайте число от 0 до 100", "brief");
			writeElem("Ответить", "button");
			OnOffElement("userAnswer", false);
			isStart = true;
			n_player++;
		} else {
			writeElem(curr_player, "currPlayer");
			var userAnswer = readInt();

			if(userAnswer == answer){
				writeElem("Поздравляю, " + curr_player + ", вы победитель!", "brief");
				writeElem("", "currPlayer");
				OnOffElement("userAnswer", true);
				writeElem("Начать сначала", "button");
				n_player = 0;
				isStart = false;
			} else if(userAnswer > answer){
				writeElem("Вы ввели слишком большое число. Введите число от 0 до 100", "brief");
				n_player++;
			} else if(userAnswer < answer){
				writeElem("Вы ввели слишком маленькое число. Введите число от 0 до 100", "brief");
				n_player++;
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
					
					<p id="currPlayer"></p>
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