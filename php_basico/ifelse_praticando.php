<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php

		//
		$usuario_possui_cartao_loja = true;
		$valor_compra = 500;
		$valor_frete = 50;
		$recebeu_desconto_frete = true;


		$valor_frete_aux = ($usuario_possui_cartao_loja && $valor_compra >= 400) ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100? 25 : $valor_frete) );

		$recebeu_desconto_frete = $valor_frete != $valor_frete_aux? true : false;

		$valor_frete = $valor_frete_aux;
		/*
		if($usuario_possui_cartao_loja && $valor_compra >= 400){
			$valor_frete = 0;
		}
		else if($usuario_possui_cartao_loja && $valor_compra >= 300){
			$valor_frete = 10;
		}
		else if($usuario_possui_cartao_loja && $valor_compra >= 100){
			$valor_frete = 25;
		}
		else{
			$recebeu_desconto_frete = false;
		}*/

	?>

	<h1>Detalhos do Pedido</h1>

	<p>Possui cartão da loja? 
		<?php

			//Operador Ternário - <condicao> ? true: false;
			echo $usuario_possui_cartao_loja ? 'Sim': 'Não';
			/*
			if($usuario_possui_cartao_loja){
				echo 'Sim';
			}
			else{
				echo 'Não';
			}*/
		?>
	</p>

	<p>Valor da compra: <?= $valor_compra ?> </p>

	<p>Recebeu desconto frete? 
		<?= $recebeu_desconto_frete ? 'Sim' : 'Não'; ?>
	</p>

	<p>Valor da frete: <?= $valor_frete ?> </p>

</body>
</html>