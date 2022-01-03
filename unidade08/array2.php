<?php
	$_megasena = array(47, 29, 42, 04, 27, 21);

	sort($_megasena)
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
			echo "Maior valor do array: " . max($_megasena) . "<br>";
			echo "Menor valor do array: " . min($_megasena) . "<br>";
		?>

		<pre>
			<?php
				print_r($_megasena);
			?>
		</pre>
	</body>
</html>