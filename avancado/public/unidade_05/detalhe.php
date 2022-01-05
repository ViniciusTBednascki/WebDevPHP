<?php require_once("../../conexao/conexao.php"); ?>
<?php
    if(isset($_GET["codigo"])) {
		$produtoID = $_GET["codigo"];
	} else {
		header("Location: listagem.php");
		exit();
	}

	// Consulta ao banco de dados
	$consulta = "SELECT *";
	$consulta .= " FROM produtos";
	$consulta .= " WHERE produtoID = {$produtoID}";
	$detalhe = mysqli_query($conexao, $consulta);
	
	if($detalhe->num_rows == 0) {
		$erro_busca = "Produto não encontrado.";
	} else {
		$dados_detalhe = mysqli_fetch_assoc($detalhe);
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
			<?php
				if(isset($erro_busca)) {
					echo $erro_busca;
				} else {
					print_r($dados_detalhe);
				}
			?>
		</main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
	// Fechar conexao
	mysqli_close($conexao);
?>