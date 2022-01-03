<?php 
	$_salario = 800;
	$_meses   = 3;
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
				// Multiplicacao e Divisao
				echo "Multiplicação: " . $_salario * $_meses . "</br>";
				echo "Divisão: " . $_salario / 2 . "</br>";

				// Exponencial
				echo "Exponencial: " . pow(6,2) . "</br>";

				// Raiz Quadrada
				echo "Raiz quadrada: " . sqrt(36) . "</br>";

				// Randômico Generica
				echo "Randomico: " . rand() . "</br>";
				
				// Randômico entre um intervalo
				echo "Randomico no intervalo: " . rand(1,5) . "</br>";
				
				// Valor absoluto
				echo "Valor absoluto: " . abs(-6) . "</br>";	
			?>
    </body>
</html>