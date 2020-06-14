<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		$itens = array('sofa', 'mesa', 'cadeira', 'fogao', 'geladeira');

		foreach($itens as $item){
			echo $item . '<br>';

			if($item == 'mesa'){
				echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras.) <br>';
			}
		}

	?>

</body>
</html>