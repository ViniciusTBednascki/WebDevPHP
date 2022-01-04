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
			$_dataInicial = new DateTime('2022-01-01');
			$_dataAtual = new DateTime('2021-12-30');
			$_intervalo = $_dataInicial->diff($_dataAtual);
		?>
		
		<pre>
			<?php
				print_r($_intervalo);
			?>
		</pre>
		
		<pre>
			<?php
				print_r($_intervalo->format('%r%a'));
			?>
		</pre>
	</body>
</html>