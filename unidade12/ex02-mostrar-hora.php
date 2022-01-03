<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 12 - Data e Hora</title>
	</head>
	<body>
		<?php
			date_default_timezone_set("Brazil/East");  
			$_agora = getdate();
			
			[
				"seconds" => $_segundos,
				"minutes" => $_minutos,
				"hours" => $_horas,
				"mday" => $_dia,
				"mon" => $_mes,
				"year" => $_ano,
			] = $_agora;
			
			echo "$_horas:$_minutos:$_segundos - $_dia/$_mes/$_ano" . "<br>";
		?>
	</body>
</html>