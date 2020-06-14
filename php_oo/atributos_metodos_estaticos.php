<?php
	class Exemplo{
		public static $attr1 = 'Eu sou um atributo estático';
		public $attr2 = 'Eu sou um atributo normal';

		public static function metodo1(){
			echo $this->atibuto2;
			echo 'Eu sou um método estático';
		}

		public function metodo2(){
			echo 'Eu sou um método normal';
				
		}
	}

	$x = new Exemplo();

	echo $x->attr2;
	//echo $x->attr1;

	/*
	echo Exemplo::$attr1;
	echo '<br>';
	Exemplo::metodo1();*/

	echo Exemplo::metodo1();

?>