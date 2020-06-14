<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		$nome = 'Maria';
		$cor = 'preto';
		$idade = 25;
		$atividade_preferida = 'corrida de carro';


		//Operador . --mais rápido
		echo 'Olá ' .$nome. ', vi que sua cor preferida é '.$cor.', estou vendo que você possui '.$idade.' anos e que gosta de ' .$atividade_preferida;

		echo '<hr/>';
		//aspas duplas --mais lento
		echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo que você possui $idade anos e que gosta de $atividade_preferida";
	?>

</body>
</html>