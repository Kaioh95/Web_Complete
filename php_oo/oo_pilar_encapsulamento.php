<?php
	
	class Pai{
		private $nome = 'Kaio';
		protected $sobrenome = 'Henrique';
		public $humor = 'Trigged';
		
		public function __get($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){

			if(strlen($value) >= 3){
				$this->$attr = $value;
			}
		}

		private function executarMania(){
			echo 'Assobiar';
		}

		protected function responder(){
			echo 'Oi';
		}

		public function executarAcao(){
			$x = rand(1, 10);

			if($x > 0 && $x <= 8){
				$this->executarMania();
			}
			else{
				$this->responder();
			}
		}
	}

	//Herda atributos e métodos public e protected
	class Filho extends Pai{

		public function __construct(){
			//exibir os métodos do objeto
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}
		/*
		public function getAtributo($attr){
			return $this->$attr;
		}

		//Cria atributos dinamimente
		public function setAtributo($attr, $value){
			$this->$attr = $value;
		}*/

		public function __get($attr){
			return $this->$attr;
		}

		public function __set($attr, $value){

			if(strlen($value) >= 3){
				$this->$attr = $value;
			}
		}

		private function executarMania(){
			echo 'Cantar';
		}

		public function x(){
			$this->executarMania();
		}

		protected function responder(){
			echo 'Olá';
		}

	}

	$pai = new Pai();

	echo $pai->humor;
	$pai->humor = 'Triste';
	echo '<br>';
	echo $pai->humor;

	echo '<br>';
	//o php utiliza o metodo __set automaticamente
	//$pai->nome = 'José';
	//o php utiliza o metodo __get automaticamente
	//echo $pai->nome;

	echo '<br>';
	//$pai->__set('sobrenome', 'Jubsclaiton');
	//echo $pai->sobrenome;

	echo '<br>';
	$pai->executarAcao();

	echo '<hr>';
	$filho = new Filho();
	echo '<pre>';
		print_r($filho);
	echo '</pre>';

	$filho->executarAcao();
	echo '<br>';
	$filho->x();

	echo $filho->__get('nome'); //ERRO nesta linha
	echo $filho->__set('nome', 'Maria');
	echo '<br>';
	echo $filho->__get('nome');
?>