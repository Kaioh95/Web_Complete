<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php

		$idade = 16;
		$peso = 50;

		if(($idade>15 && $idade<70) && $peso>=50){
			echo "Atende aos requisitos";
		}
		else{
			echo "Não atende aos requisitos";
		}

	?>

</body>
</html>