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

		function trocarMarcha(){
			echo 'Desengatar embregem com a mão e engatar marcha com o pé';
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

		function trocarMarcha(){
			echo 'Desengatar embregem com o pé e engatar marcha com a mão';
		}
	}

	class Caminhao extends Veiculo{}

	$carro = new Carro('ABC1234', 'Branco');
	$moto = new Moto('DEF2322', 'Azul');
	$caminhao = new Caminhao();

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
	echo '<br />';
	$carro->trocarMarcha();

	echo '<hr />';
	$moto->empinar();
	echo '<br />';
	$moto->acelerar();
	echo '<br />';
	$moto->freiar();
	echo '<br />';
	$moto->trocarMarcha();

	echo '<br />';
	$caminhao->trocarMarcha();
?>