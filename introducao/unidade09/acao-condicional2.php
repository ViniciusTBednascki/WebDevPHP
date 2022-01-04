<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 09 - Ações Condicionais</title>
	</head>
	<body>
		<?php
			$_dia = "quarta";

			switch ($_dia) {
				case 'segunda':
					echo "Hoje é segunda";
					break;

				case 'terça':
					echo "Hoje é terça";
					break;

				case 'quarta':
					echo "Hoje é quarta";
					break;

				case 'quinta':
					echo "Hoje é quinta";
					break;

				case 'sexta':
					echo "Hoje é sexta";
					break;

				case 'sábado':
					echo "Hoje é sábado";
					break;

				case 'domingo':
					echo "Hoje é domingo";
					break;

				default:
					echo "Esse não é um dia da semana";
					break;
			}
		?>
	</body>
</html>