<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
	
		$x = 10;
		$y = 5;
		$x **= $y;

		echo $x;
		echo "<br>O valor contido em y $y <br>";
		echo 'O valor contido em y ' .$y++. ' <br>';
		echo 'O valor contido em y ' .$y--. ' <br>';
		echo 'O valor contido em y ' .--$y. ' <br>';
		echo 'O valor contido em y ' .++$y. ' <br>';
		echo "O valor contido em y $y <br>";

	?>

</body>
</html>