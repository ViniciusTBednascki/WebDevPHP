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
			$_pessoa = [
				"nome" => "Vinicius",
				"telefone" => "99999-8888",
				"salario" => 4800,
			];

			foreach ($_pessoa as $_info => $_valor) {
				echo "$_info: $_valor" . "<br>";
			}
		?>
	</body>
</html>