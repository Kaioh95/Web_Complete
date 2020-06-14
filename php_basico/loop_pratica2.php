<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$funcinarios = array(
			array('nome' => 'Joao', 'salario' => 2500, 'data_nascimento' => '06/03/1970'), 
			array('nome' => 'Maria', 'salario' => 3000), 
			array('nome' => 'Julia', 'salario' => 2200));

		foreach($funcinarios as $i => $funcionario){
			foreach($funcionario as $j => $valor){
				echo "$j - $valor <br>";
			}
			echo "<hr>";
		}

	?>

</body>
</html>