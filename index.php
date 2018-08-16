<!DOCTYPE html>
<html>
<head>
	<title>Calculadora Sistemas</title>
</head>
<body style=" background: #FFF0F5">
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
	</form>