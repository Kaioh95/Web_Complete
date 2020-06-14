<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		//string
		$nome = 'Kaio Henrique';
		//int
		$idade = 22;
		//float
		$peso = 59;
		//boolean
		$fumante_sn = false; //true=1 ou false = vazio

		$idade = '19';
	?>

	<h1>Ficha Cadastral</h1>
	<br/>
	<p>Nome: <?= $nome ?></p>
	<p>Idade: <?= $idade ?></p>
	<p>Peso: <?= $peso ?></p>
	<p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>