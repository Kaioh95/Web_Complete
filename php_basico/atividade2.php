<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Cusro PHP</title>

</head>

<body>
	<?php

		function calcularIRPF($renda){
			$imposto = 0;
			if($renda <= 1903.98){
				$imposto = 0;
			}
			else if($renda >= 1903.99 && $renda <= 2826.65){
				$imposto = ($renda*7.5)/100;
			}
			else if($renda >= 2826.66 && $renda <= 3751.05){
				$imposto = ($renda*15)/100;
			}
			else if($renda >= 3751.06 && $renda <= 4664.68){
				$imposto = ($renda*22.5)/100;
			}
			else if($renda > 4664.68){
				$imposto = ($renda*27.5)/100;
			}
			return $imposto;
		}

		echo calcularIRPF(5000);
	?>

</body>
</html>