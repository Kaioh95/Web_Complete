<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		echo '<h1>is_array</h1>';
		$array = ['Notebook', 'Teclado'];
		$retorno = is_array($array);

		if($retorno){
			echo 'Sim é um array';
		}
		else{
			echo 'Não é um array';
		}

		$array1 = [1 => 'a', 7 => 'b', 18 => 'c'];

		echo '<pre>';
			print_r($array1);
		echo '</pre>';

		echo '<h1>array_keys</h1>';
		$chaves_array = array_keys($array1);

		echo '<pre>';
			print_r($chaves_array);
		echo '</pre>';

		echo '<h1>sort</h1>';
		$array3 = array('teclado', 'mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook');

		echo '<pre>';
			print_r($array3);
		echo '</pre>';

		sort($array3); //True or False
		echo '<pre>';
			print_r($array3);
		echo '</pre>';

		echo '<h1>asort</h1>';
		$array4 = array('teclado', 'mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook');

		echo '<pre>';
			print_r($array4);
		echo '</pre>';

		asort($array4); //True or False
		echo '<pre>';
			print_r($array4);
		echo '</pre>';

		echo '<h1>count</h1>';
		$array5 = array('teclado', 'mouse', 'cabo HDMI', 'gabinete', 'fonte atx', 'notebook');

		echo '<pre>';
			print_r($array5);
			echo count($array5);
		echo '</pre>';

		echo '<h1>array_merge</h1>';
		$a1 = ['osx', 'windows'];
		$a2 = array('linux');
		$a3 = ['solaris'];

		$new_a = array_merge($a1, $a2, $a3);
		echo '<pre>';
			print_r($new_a);
		echo '</pre>';

		echo '<h1>explode</h1>';
		$string = '26-04-2018';
		$array_retorno = explode('-', $string);

		echo '<pre>';
			echo $string;
			print_r($array_retorno);
			echo $array_retorno[2]. '-' .$array_retorno[1]. '-' . $array_retorno[0];
		echo '</pre>';

		echo '<h1>implode</h1>';
		$ar = ['a', 'b', 'x', 'y']; //a, b, x, y
		$string_retorno = implode(', ', $ar);
		echo $string_retorno;	

	?>

</body>
</html>