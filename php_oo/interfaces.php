<?php

	interface EquipamentoEletronicoInterface{
		public function ligar();
		public function desligar();
	}

	class Geladeira implements EquipamentoEletronicoInterface{
		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}

		public function abrirPorta(){
			echo 'Abrir a porta';
		}
	}

	class Tv implements EquipamentoEletronicoInterface{
		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}

		public function trocarCanal(){
			echo 'Trocar canal';
		}
	}
	 //------------------------------------------

	interface MamiferoInterface{
		public function respirar();
	}

	interface TerrestreInterface{
		public function andar();
	}

	interface AquaticoInterface{
		public function nadar();
	}

	class Humano implements MamiferoInterface, TerrestreInterface{

		public function respirar(){
			echo 'Respirar';
		}
		public function andar(){
			echo 'Andar';
		}
		public function conversar(){
			echo 'Conversar';
		}
	}

	class Baleias implements MamiferoInterface, AquaticoInterface{

		public function respirar(){
			echo 'Respirar';
		}
		public function nadar(){
			echo 'Nadar';
		}
		protected function esquichar(){
			echo 'Esquichar';
		}
	}

	//-------------------------------------

	interface AnimalInterface{
		public function comer();
	}

	interface AveInterface extends AnimalInterface{
		public function voar();
	}

	class Papagaio implements AveInterface{
		public function voar(){
			echo 'Voar';
		}
		public function comer(){
			echo 'Comer';
		}
	}


	$geladeira = new Geladeira();
	$tv = new Tv();

	$geladeira->ligar();

?>