<?php
	$_fumante = true;
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
				echo "É fumante? ". ($_fumante == true ? "sim" : "não") . "<br>";
				echo "É booleana? ". (is_bool($_fumante) == true ? "sim" : "não") . "<br>";
			?>
		</body>
</html>