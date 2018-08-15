<?php 

$num1 = $_POST["val1"]; 
$oper = $_POST["opera"];
$num2 = $_POST["val2"];

switch ($oper) {
	case '+':$total =  $num1 + $num2;
		echo "O resultado da soma é: $total";
		break;
	
	case '-': $total = $num1 - $num2;
			  echo "O resultado da subtração é: $total";
		
		break;	

	case 'x': $total = $num1 * $num2;
			  echo "O resultado da multiplicação é: $total";
		
		break;
	case '*':$total = $num1 * $num2;
			  echo "O resultado da multiplicação é: $total";
		
		break;
	case '/':$total = $num1 / $num2;
			  echo "O resultado da divisão é: $total";
		
		break;	
	default:
		# code...
		break;
}


 ?>