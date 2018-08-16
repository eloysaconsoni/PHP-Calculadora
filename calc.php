<link rel="stylesheet" type="text/css" href="css/css.css">
<body style="background: #607B8B">

<?php 
error_reporting(0);

 $_POST["val1"]; 
 $_POST["opera"];
 $_POST["val2"];

	evazio();

function evazio(){

			if(empty($_POST['val1']) || empty($_POST['opera'])){ 
			//validação de campos vazios
		echo "Existem campos não preenchidos por favor verifique";
}else{
	caso();
}
}
function caso(){
switch ($_POST["opera"]) {
	case '+':$total =  $_POST["val1"] + $_POST["val2"];
		echo "O resultado da soma é: $total";
		break;
	
	case '-': $total = $_POST["val1"] - $_POST["val2"];
			  echo "O resultado da subtração é: $total";
		
		break;	

	case 'x': $total = $_POST["val1"] * $_POST["val2"];
			  echo "O resultado da multiplicação é: $total";
		
		break;
	case '*':$total = $_POST["val1"] * $_POST["val2"];
			  echo "O resultado da multiplicação é: $total";
		
		break;
	case '/':  if($_POST["val2"] == 0 || empty($_POST['val2'])) {
					echo "Não é possivel dividir por zero ou nada"; //validação de dividir por zero
				}else{
			  $total = $_POST["val1"] / $_POST["val2"];
			  echo "O resultado da divisão é: $total";  }
		
		break;
	case '%': $total = $_POST["val1"] * $_POST["val2"];
			  $total = $total / 100;
			  echo "O resultado da porcentagem é: $total%";
			break;
	case 'is_numeric($_POST["opera"])':
			echo "Não é possivel usar uma operação númerica";
		break;
	default:
		
		break;
}

}
 ?>

<p class="icone">
	<img style="left: 1200px;" src="css/imagens/minus.png"> 
	<img style="left: 200px; top:500px;" src="css/imagens/multiply.png"> 
	<img style="left: 560px; top: 300px" src="css/imagens/percentage.png">
	<img style="left: 1000px;top: 500px;" src="css/imagens/division.png">
	<img src="css/imagens/plus.png"> </body>
</p>
