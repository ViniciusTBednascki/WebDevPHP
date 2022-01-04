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
			$_numero1 = 8;
			$_numero2 = "8";

			if($_numero1 == $_numero2) {
				echo "A é igual a B" . "<br>";
			} else {
				echo "A não é igual a B" . "<br>";
			}

            if($_numero1 === $_numero2) {
				echo "A é identico a B" . "<br>";
			} else {
				echo "A não é identico a B" . "<br>";
			}
		?>
	</body>
</html>