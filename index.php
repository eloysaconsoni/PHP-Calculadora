<!DOCTYPE html>
<html>
<head>
	<title>Calculadora Sistemas</title>
</head>
<body style="background: #A2B5CD;">
	<link rel="stylesheet" type="text/css" href="css/css.css">

	<p  style=""><h2><b class="fonte"> Calculadora em PHP</b></h2>  </p>
	<p class="fonte" style="top: 50px">Calculadora feita com as opções que a linguagem PHP nos oferece</p>
		<form  method="post" action="calc.php">
	<fieldset class="fundo">
		<p>
		<p><label for="pri">Digite o primeiro valor:</label><input id="pri" type="text" name="val1"></p>
	   <p><label for="op">Digite a operação desejada:</label><input id="op" type="text" name="opera"></p>
		<p><label for="sec">Digite o segundo valor:</label><input id="sec" type="text" name="val2"></p>
		<p><input type="submit" value="Calcular" name="calcula"></p>
		</p>
	</fieldset>
	</form><p class="icone">
	<img style="left: 1200px;" src="css/imagens/minus.png"> 
	<img style="left: 200px; top:500px;" src="css/imagens/multiply.png"> 
	<img style="left: 560px; top: 300px" src="css/imagens/percentage.png">
	<img style="left: 1000px;top: 500px;" src="css/imagens/division.png">
	<img src="css/imagens/plus.png"></p>
