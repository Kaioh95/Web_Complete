<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$lista_coisas = [];

		$lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maca', 3 => 'Morango', 4 => 'Uva'];
		$lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

		echo '<pre>';
		print_r($lista_coisas);
		echo '</prev>';

		echo '<hr>';
		echo $lista_coisas['frutas'][3];
		echo '<hr>';
		echo $lista_coisas['pessoas'][2];

	?>

</body>
</html>