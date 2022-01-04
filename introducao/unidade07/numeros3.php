<?php
	$_gasolina = 4.55;
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
				echo "Arredondar o valor $_gasolina" . "</br>";

				// arredondar para media
				echo "Para media: " . round($_gasolina) . "</br>";

				// arredondar para cima
				echo "Para cima: " . ceil($_gasolina) . "</br>";

				// arredondar para baixo
				echo "Para baixo: " . floor($_gasolina) . "</br>";

			?>
		</body>
</html>