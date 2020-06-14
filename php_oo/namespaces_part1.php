<?php

	namespace A;
	class Cliente implements \B\CadastroInterface{
		public $nome = 'Maria';

		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function salvar(){
			echo 'Salvar';
		}

		public function remover(){
			echo 'Remover';
		}
	}

	interface CadastroInterface{
		public function salvar();
	}

	namespace B;
	class Cliente implements \A\CadastroInterface{
		public $nome = 'Kaio';

		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function remover(){
			echo 'Remover';
		}

		public function salvar(){
			echo 'Salvar';
		}		
	}

	interface CadastroInterface{
		public function remover();
	}

	//--------------------
	$c = new Cliente();

	print_r($c);
	echo $c->__get('nome');
	echo '<br>';

	//--------------------
	$a = new \A\Cliente();

	print_r($a);
	echo $a->__get('nome');


?>