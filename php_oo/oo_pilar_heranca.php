<?php
	//modelo
	class Carro extends Veiculo{
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar(){
			echo 'Abrir Teto Solar';
		}

		function alterarPosicaoVolante(){
			echo 'Alterar Posição Volante';
		}
	}

	class Moto extends Veiculo{
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar(){
			echo 'Empinar';
		}
	}

	class Veiculo{
		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo 'Acelerar';
		}

		function freiar(){
			echo 'Freiar';
		}
	}

	$carro = new Carro('ABC1234', 'Branco');
	$moto = new Moto('DEF2322', 'Azul');

	echo '<pre>';
	print_r($carro);
	echo '<hr />';
	print_r($moto);
	echo '</pre>';

	$carro->abrirTetoSolar();
	echo '<br />';
	$carro->acelerar();
	echo '<br />';
	$carro->freiar();

	echo '<hr />';
	$moto->empinar();
	echo '<br />';
	$moto->acelerar();
	echo '<br />';
	$moto->freiar();
?>