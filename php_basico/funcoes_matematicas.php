<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		$num = 7.3;

		echo ceil($num); // arredonda para cima
		echo '<br>';
		echo floor($num); // arredonda para baixo
		echo '<br>';
		echo round($num); //0.4 => baixo || 0.5 => cima
		echo '<br>';
		echo rand(10, 20); // Gera valor aletorio 0 ate randmax
		echo '<br>';
		echo getrandmax();
		echo '<br>';
		echo sqrt(9); // Raiz quadrada
	?>

</body>
</html>