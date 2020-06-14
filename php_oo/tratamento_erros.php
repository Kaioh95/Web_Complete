<?php

	try{

		echo '<h3>*** Try ****</h3>';

		//$sql = 'Select * from clients';
		//mysql_query($sql); //Erro

		if(!file_exists('require_arquivo.php')){
			throw new Exception('O arquivo em questao deveria estar disponivel as ' .date('d/m/Y H:i:s'). ' horas mas nao estava vamos seguir mesmo assim!');
		}

	}
	catch(Error $e){
		echo '<h3>*** Catch Error ****</h3>';
		echo '<p style="color: red">'. $e .'</p>';
		//armazenando esse erro em banco de dados
	}
	catch(Exception $e){
		echo '<h3>*** Catch Exception ****</h3>';
		echo '<p style="color: red">'. $e .'</p>';
		//armazenando esse erro em banco de dados
	}
	finally{
		echo '<h3>*** Finally ****</h3>';
	}

?>