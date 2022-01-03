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
			$_idade = 17;

			$_maioridade = ($_idade >= 18) ? "De maior" : "De menor";

			echo $_maioridade;
		?>
	</body>
</html>