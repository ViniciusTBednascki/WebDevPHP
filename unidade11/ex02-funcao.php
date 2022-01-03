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
			function retornarDiaria($_salario, $_dias) {
				return number_format($_salario/$_dias, 2);
			}

			echo retornarDiaria(4800, 30) . "<br>";
			echo retornarDiaria(1000, 15) . "<br>";
		?>
	</body>
</html>