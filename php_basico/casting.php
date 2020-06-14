<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
	
		//gettype() => retorna o tipo da variavel
		$valor = 10;
		$valor2 = (real) $valor; //float, double ou real
		$valor3 = (string) $valor; //string
		$valor4 = (int) $valor3; //int ou integer
		$str = 'abc';
		$str = (boolean) $str; //bool ou boolean

		echo $valor . ' ' . gettype($valor);
		echo '<br>';
		echo $valor2 . ' ' . gettype($valor2);
		echo '<br>';
		echo $valor3 . ' ' . gettype($valor3);
		echo '<br>';
		echo $valor4 . ' ' . gettype($valor4);
		echo '<br>';
		echo $str . ' ' . gettype($str);

	?>

</body>
</html>