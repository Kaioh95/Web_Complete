<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		//sequencias (numericos)
		//$lista_frutas = array('Banana', 'Macã', 'Morango', 'Uva');
		echo '<h1>Sequencias (numericos)</h1>';

		$lista_frutas=['Banana', 'Macã', 'Morango', 'Uva'];

		$lista_frutas[] = 'Abacaxi';

		echo '<pre>';
			var_dump($lista_frutas);
		echo '</pre>';
		echo '<hr>';
		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		echo '<hr>';
		echo $lista_frutas[3];

		//associativos
		echo '<h1>Associativos</h1>';

		$lista_frutas1 = [
			'a' => 'Banana',
			'b' => 'Macã',
			'x' => 'Morango',
			'2' => 'Uva'];
		$lista_frutas1['w'] = 'Abacaxi';

		echo '<pre>';
			var_dump($lista_frutas1);
		echo '</pre>';

		echo '<hr>';
		echo $lista_frutas1['2'];

	?>

</body>
</html>