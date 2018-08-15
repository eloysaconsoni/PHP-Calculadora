<!DOCTYPE html>
<html>
<head>
	<title>Calculadora Sistemas</title>
</head>
<body>
	<p> Calculadora em PHP </p>
		<form  method="post" action="calc.php">
	<fieldset>
		<p>
		<p><label for="pri">Digite o primeiro valor:</label><input id="pri" type="text" name="val1"></p>
	   <p><label for="op">Digite a operação desejada:</label><input id="op" type="text" name="opera"></p>
		<p><label for="sec">Digite o segundo valor:</label><input id="sec" type="text" name="val2"></p>
		<p><input type="submit" value="Calcular" name="calcula"></p>
		</p>
	</fieldset>
	</form>