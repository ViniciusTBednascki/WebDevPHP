<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 13 - Links com parâmetro</title>
	</head>
	<body>
		<?php
			$_fonteImagens = "imagens/";
			$_salada = [
				"laranja.jpg",
				"maca.jpg",
				"abacate.jpg",
			];

			$_codigo = $_GET["codigo"];
			$_imagem = $_salada[$_codigo];
		?>

		<img src="<?php echo $_fonteImagens . $_imagem; ?>" alt="Imagem da fruta">
	</body>
</html>