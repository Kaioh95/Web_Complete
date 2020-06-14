<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php
		
		//recuperando data atual
		echo date('d/m/Y H:i');
		echo('<br>');
		echo date_default_timezone_get();
		echo('<br>');
		date_default_timezone_set('America/Sao_Paulo');
		echo('<br>');
		echo date('d/m/Y H:i');
		echo('<br>');

		$data_inicial = '2018-04-24';
		$data_final = '2018-05-15';

		//timestamp
		//01/01/1970 -- 2018-04-24
		// (jd -> milisegundos / php -> segundos)

		$time_inicial = strtotime($data_inicial);
		$time_final = strtotime($data_final);
		echo $data_inicial . ' - ' . $time_inicial;
		echo('<br>');
		echo $data_final . ' - ' . $time_final;

		$diferenca_times = abs($time_final - $time_inicial);

		echo('<br>');
		echo('A diferenca de segundos entre a data inicial e final eh ' . $diferenca_times);

		$segundos_existem_dia = 24*60*60;

		echo('<br>');
		echo('Um dia possui ' . $segundos_existem_dia . ' segundos');

		$diferenca_dias_entre_datas = $diferenca_times / $segundos_existem_dia;

		echo('<br>');
		echo('A diferenca de dias entre a data inicial e final eh ' . $diferenca_dias_entre_datas);
	?>

</body>
</html>