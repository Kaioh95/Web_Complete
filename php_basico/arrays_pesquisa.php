<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		// in_array[] -> true ou false
		// array_search() -> retorna o índece do valor pesquisado, caso ele exista, se não retorna null.

		$lista_frutas = ['Banana', 'Maca', 'Morango', 'Uva'];

		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		echo '<hr>';
		$existe = in_array('Maca', $lista_frutas);
		//true -> texto = 1
		//false -> texto = vazio
		$existe1 = array_search('Uva', $lista_frutas);
		
		if($existe){
			echo 'Sim, o valor pesquisado existe no array';
		}
		else{
			echo 'Não o valor pesquisado não existe no array';
		}

		echo '<hr>';
		if($existe1){
			echo 'Sim, o valor pesquisado existe no array';
		}
		else{
			echo 'Não o valor pesquisado não existe no array';
		}
		
		$lista_coisas = [
			'frutas' => $lista_frutas,
			'pessoas' => ['João', 'Maria']
		];

		echo '<pre>';
			print_r($lista_coisas);
		echo '</pre>';

		echo in_array('Uva', $lista_coisas['frutas']);
		echo '<hr>';
	?>

</body>
</html>