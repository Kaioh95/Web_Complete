<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
	
		function exibirBoasVindas(){
			echo 'Bem-vindo ao curso de PHP! <br>';
		}

		function calcularAreaTerreno($largura, $comprimento){
			return $largura*$comprimento;
		}

		exibirBoasVindas();
		echo calcularAreaTerreno(5, 5) . '<br>';

	?>

</body>
</html>