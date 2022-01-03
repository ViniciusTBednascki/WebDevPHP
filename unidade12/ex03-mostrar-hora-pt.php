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
            setlocale(LC_TIME, "portuguese");
			$_agora = getdate();
			
			[
				"seconds" => $_segundos,
				"minutes" => $_minutos,
				"hours" => $_horas,
				"mday" => $_dia,
				"year" => $_ano,
			] = $_agora;
            $_mes = strftime("%B");
			
			echo "$_horas:$_minutos:$_segundos - " . strftime("%A") . ", $_dia de $_mes de $_ano" . "<br>";
		?>
	</body>
</html>