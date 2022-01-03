<?php
	$_nome = "Vinicius Terres";
	$_telefone = "9412-1234";
	$_fumante = true;
	$_profissao = null;
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
				echo "A variável nome foi setada? ". (isset($_nome) == true ? "sim" : "não") . "<br>";
				echo "A variável telefone foi setada? ". (isset($_telefone) == true ? "sim" : "não") . "<br>";
				echo "A variável fumante foi setada? ". (isset($_fumante) == true ? "sim" : "não") . "<br>";
				echo "A variável profissao foi setada? ". (isset($_profissao) == true ? "sim" : "não") . "<br>";
				echo "A variável email foi setada? ". (isset($_email) == true ? "sim" : "não") . "<br>";
			?>
		</body>
</html>