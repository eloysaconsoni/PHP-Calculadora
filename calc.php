<?php 
//error_reporting(0);

 $_POST["val1"]; 
 $_POST["opera"];
 $_POST["val2"];
teste();

function teste(){
if (is_null($_POST["val1"])) {
	echo "Um dos valores não foi digitado, por favor verifique";
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
	case '/':  if($_POST["val2"] == 0) {
					echo "Não é possivel dividir por zero"; //validação de dividir por zero
				}else{
			  $total = $_POST["val1"] / $_POST["val2"];
			  echo "O resultado da divisão é: $total";  }
		
		break;
	case '%': $total = $_POST["val1"] * $_POST["val2"];
			  $total = $total / 100;
			  echo "O resultado da porcentagem é: $total";
			break;
	default:
		
		break;
}

}
 ?>