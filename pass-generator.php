<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Генератор пароля</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript">

	var gain = ["A", "a", "B", "b", "C", "c", "D", "d", "E", "e", "F", "f", "G", "g", "H", "h", "I", "i", "J", "j", "K", "k", "L", "l", "M", "m", "N", "n", "O", "o", "P", "Q", "q", "R", "r", "S", "s", "T", "t", "U", "u", "V", "v", "W", "w", "X", "x", "Y", "y", "Z", "z", "1", "2", "3", "4", "5", "6", "7", "8", "9","0",];

	function readInt(){
	   return + document.getElementById("userAnswer").value;
	}

	function getRandomNumber (max) {
	    return Math.round(Math.random() * max);
	}

	function genPass(length) {
	    var code = "";
	    for(var i = 0; i < length; i++){
	    var n = getRandomNumber(gain.length - 1);
	        code = code + gain[n];
	    }
	    return code;
	}
	function generate(){
	    var length = readInt();
	    var password = genPass(length);
	    write(password);
	}

	function write(text){
	    document.getElementById("password").innerHTML += text;
	}
</script>
</head>
<body>

<div class="content">
<?php include "menu.php"?>
<div class="contentWrap">
    <div class="content">
        <div class="center">

		    <h1>Генератор пароля</h1>
		    <div class="box">
		        <p id="info">Введите желаемое количество символов в пароле</p>
		         <p id="password">Ваш Пароль: </p>
		        <br> 
		        <input type="text" id="userAnswer">  
		        <br>   
	        	<a href="#" onClick="generate()">Начать</a>
	        	<br>

				<p id="password"></p>
				
			</div>
        </div>
    </div>
</div>

	

</div>
<?php include "footer.php"?>


</body>
</html>