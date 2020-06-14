<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php

		//f e v = f
		if(5 == 3 && 10 > 3){
			echo 'Verdadeiro <br/>';
		}
		else{
			echo 'Falso <br/>';
		}

		//v ou f = v
		if(4 == 4 || 10 > 15){
			echo 'Verdadeiro <br/>';
		}
		else{
			echo 'Falso <br/>';
		}

		//v xor v = f
		if(4 == 4 xor 10 < 15){
			echo 'Verdadeiro <br/>';
		}
		else{
			echo 'Falso <br/>';
		}

		//v xor v = f
		if(!(4 == 4 xor 10 < 15)){
			echo 'Verdadeiro <br/>';
		}
		else{
			echo 'Falso <br/>';
		}

	?>

</body>
</html>