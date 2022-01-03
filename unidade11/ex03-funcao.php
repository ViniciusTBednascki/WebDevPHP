<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 11 - Funções</title>
	</head>
	<body>
		<?php
			function converterCelsiusParaFarenheit($_temperatura) {
				return ($_temperatura * 1.8) + 32;
			}

			
			function converterFarenheitParaCelsius($_temperatura) {
				return ($_temperatura - 32) / 1.8;
			}

			echo converterCelsiusParaFarenheit(20) . "<br>";
			echo converterFarenheitParaCelsius(68) . "<br>";
		?>
	</body>
</html>