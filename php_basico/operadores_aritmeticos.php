<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
	
		$num1 = 13;
		$num2 = 4;

		echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
		echo '<br/>';
		echo "A subtracão entre $num1 e $num2 é " . ($num1 - $num2);
		echo '<br/>';
		echo "A multiplicacão entre $num1 e $num2 é " . ($num1 * $num2);
		echo '<br/>';
		echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
		echo '<br/>';
		echo "O módulo entre $num1 e $num2 é " . ($num1 % $num2);
		echo '<br/>';
		echo "$num1 elevado a $num2 é " . ($num1**$num2);
	?>

</body>
</html>