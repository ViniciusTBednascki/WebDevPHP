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
			print_r($_agora);
		?>
	</body>
</html>