<?php
	$_salada = array("Maçã", "Abacaxi", "Laranja");
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 08 - Arrays</title>
	</head>
	<body>
		<?php
			echo $_salada[0] . "<br>";
			echo $_salada[1] . "<br>";
			echo $_salada[2] . "<br>";

			$_salada[] = "Abacate";
			echo $_salada[3] . "<br>";

			echo "Tamanho da salada: " . count($_salada);
		?>

		<pre>
			<?php
				print_r($_salada);
			?>
		</pre>
	</body>
</html>