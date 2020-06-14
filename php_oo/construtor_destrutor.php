<?php
	//modelo
	class Pessoa{
		public $nome = null;

		function __construct($nome){
			$this->nome = $nome;
		}

		function __destruct(){
			echo 'Objeto removido';
		}

		function __get($atributo){
			return $this->$atributo;
		}
		function correr(){
			return $this->__get('nome') . ' está correndo';
		}
	}

	$pessoa = new Pessoa('Kaio');
	echo '<br>Nome: ' .$pessoa->__get('nome');
	echo '<br>Nome: ' .$pessoa->correr();

	echo '<br>';
	unset($pessoa); //proposital
?>