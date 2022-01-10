<?php require_once("../../conexao/conexao.php"); ?>
<?php
	// Determinar localidade BR
	setlocale(LC_ALL, 'pt_BR');
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 08 - Inserindo dados no B.D.</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<main>
            
        </main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
	// Fechar conexao
	mysqli_close($conexao);
?>