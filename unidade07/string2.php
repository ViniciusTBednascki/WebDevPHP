<?php
	$_nome = "Curso PHP Fundamental";
	$_caracter = 'u';
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 07 - Variáveis</title>
	</head>
	<body>        
		<?php 
			echo "String: " . $_nome . "<br>";

			// strlen - Retorna número de caracteres
			echo "Número de caracteres: " . strlen($_nome) . "<br>";
			
			// stripos  - Retorna primeira ocorrência
			echo "Posição da primeira ocorrencia do caracter '". $_caracter . "': " . stripos($_nome, $_caracter) . "<br>";

			// strripos - Retorna última ocorrência
			echo "Posição da última ocorrencia do caracter '". $_caracter . "': " . strripos($_nome, $_caracter) . "<br>";
			
			// strtolower - converte para letras min.
			echo "String para lower case: " . strtolower($_nome) . "<br>";

			// strtoupper - converte para letras min.
			echo "String para upper case: " . strtoupper($_nome) . "<br>";

			// SUBSTR_COUNT - Conta quantas ocorreram
			// de um texto ou string
			// Faz diferença Maiusculas e minusculas
			echo "Número de ocorrencias do caracter '". $_caracter . "': " . SUBSTR_COUNT($_nome, $_caracter) . "<br>";
		?>
	</body>
</html>