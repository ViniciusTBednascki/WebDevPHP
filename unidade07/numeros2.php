<?php
	$_salario = 1095;
	$_gasolina = 4.55;
	$_telefone = "9412-1234"
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
				// testar se é numérico
				echo "Testando se o valor é um número:" . "</br>";
				echo "O valor $_salario é um número? " . (is_numeric($_salario) == false ? "não" : "sim") . "</br>";
				echo "O valor $_gasolina é um número? " . (is_numeric($_gasolina) == false ? "não" : "sim") . "</br>";
				echo "O valor $_telefone é um número? " . (is_numeric($_telefone) == false ? "não" : "sim") . "</br>";
				echo "</br>";

				// testar se é inteiro
				echo "Testando se o valor é um inteiro:" . "</br>";
				echo "O valor $_salario é um inteiro? " . (is_int($_salario) == false ? "não" : "sim") . "</br>";
				echo "O valor $_gasolina é um inteiro? " . (is_int($_gasolina) == false ? "não" : "sim") . "</br>";
				echo "O valor $_telefone é um inteiro? " . (is_int($_telefone) == false ? "não" : "sim") . "</br>";
				echo "</br>";

				// testar se é float
				echo "Testando se o valor é ponto flutuante:" . "</br>";
				echo "O valor $_salario é ponto flutuante? " . (is_float($_salario) == false ? "não" : "sim") . "</br>";
				echo "O valor $_gasolina é ponto flutuante? " . (is_float($_gasolina) == false ? "não" : "sim") . "</br>";
				echo "O valor $_telefone é ponto flutuante? " . (is_float($_telefone) == false ? "não" : "sim") . "</br>";
				echo "</br>";

        ?>
    </body>
</html>