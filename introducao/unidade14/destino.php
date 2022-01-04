<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 14 - Formulário</title>
	</head>
	<body>
		<?php
			$_nome = (isset($_POST["nome"])) ? $_POST["nome"] : "Não definido";
			$_email = (isset($_POST["email"])) ? $_POST["email"] : "Não definido";

			echo "Nome: $_nome" . "<br>";
			echo "Email: $_email" . "<br>";
		?>
	</body>
</html>