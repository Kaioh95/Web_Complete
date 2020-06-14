<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$registros = [
			array('Titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'), 
			array('Titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'), 
			array('Titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3')];

		$idx = 0;
		while($idx < count($registros)){
			echo '<h3>'. $registros[$idx]['Titulo']. '</h3>';
			echo $registros[$idx]['conteudo'] . '<hr>';

			$idx++;
		}

		for($idx = 0; $idx < count($registros); $idx++){
			echo '<h3>'. $registros[$idx]['Titulo']. '</h3>';
			echo $registros[$idx]['conteudo'] . '<hr>';
		}
	?>

</body>
</html>