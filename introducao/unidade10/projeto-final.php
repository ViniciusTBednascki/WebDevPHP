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
			$_contador = 0;
			$_megaSena = [];

			while ($_contador < 6) {
				$_sorteio = rand(1, 60);
				if(!in_array($_sorteio, $_megaSena)) {
					$_megaSena[$_contador] = $_sorteio;
					$_contador++;
				}
			}

			echo "Números Sorteados:" . "<br>";
			foreach ($_megaSena as $_numeroSorteado) {
				echo "$_numeroSorteado ";
			}
		?>
	</body>
</html>