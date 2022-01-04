<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 10 - Estruturas de repetição</title>
	</head>
	<body>
		<?php
			for ($_contador = 0; $_contador < 6; $_contador++) {
				$_sorteio = rand(1, 60);
				echo $_sorteio . "<br>";
			}
		?>
	</body>
</html>