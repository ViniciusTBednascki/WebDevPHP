<?php require_once("../../conexao/conexao.php"); ?>
<?php
    if(isset($_GET["codigo"])) {
        $produtoID = $_GET["codigo"];
	} else {
		header("Location: listagem.php");
        exit();
    }
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 05 - Listagem-Detalhe</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
		<link href="_css/produtos.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<?php include_once("../_incluir/funcoes.php"); ?>
		<main>
            
        </main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
	// Fechar conexao
	mysqli_close($conexao);
?>