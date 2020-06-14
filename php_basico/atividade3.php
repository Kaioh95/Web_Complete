<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$senha = array();

		while(count($senha) <= 5){
			$num = rand(1, 60);

			if(!in_array($num, $senha)){
				$senha[] = $num;
			}
		}

		echo '<pre>';
			print_r($senha);
		echo '</pre>';
	?>

</body>
</html>