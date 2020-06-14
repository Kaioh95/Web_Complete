<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$num = 1;
		while($num < 10){

			$num++;
			if($num == 7 || $num == 3){
				continue;
			}

			echo $num . '<br>';
		}

	?>

</body>
</html>