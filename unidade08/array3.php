<?php
	$_salada = ["Laranja","Uva","Abacate"];
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
			echo "Existe o valor 'Laranja' no array? " . (in_array("Laranja", $_salada) == true ? "sim" : "não") . "<br>";
			echo "Indice do valor 'Laranja' no array: " . array_search("Laranja", $_salada) . "<br>";
			echo "Existe o valor 'Abacaxi' no array? " . (in_array("Abacaxi", $_salada) == true ? "sim" : "não") . "<br>";
			echo "Indice do valor 'Abacaxi' no array: " . array_search("Abacaxi", $_salada) . "<br>";
		?>
	</body>
</html>