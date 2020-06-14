<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		$texto = 'Curso Completo de PHP';

		//string to lower
		echo strtolower($texto);
		echo '<br>';

		//string to upper
		echo strtoupper($texto);
		echo '<br>';

		//ucfirst -- primeiro char maiusculo
		echo ucfirst($texto);
		echo '<br>';

		//String len
		echo strlen($texto);
		echo '<br>';

		//String replace -- para todas as ocorrencias do primeiro parametro
		echo str_replace('PHP', 'JavaScript', $texto);
		echo '<br>';

		//Sub String
		echo substr($texto, 6, 8);
		echo '<br>';

	?>

</body>
</html>