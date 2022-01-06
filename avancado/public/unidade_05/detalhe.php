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

		[
			"nomeproduto" => $nomeproduto,
			"descricao" => $descricao,
			"codigobarra" => $codigobarra,
			"tempoentrega" => $tempoentrega,
			"precorevenda" => $precorevenda,
			"precounitario" => $precounitario,
			"estoque" => $estoque,
			"imagemgrande" => $imagemgrande,
		] = $dados_detalhe;
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
		<link href="_css/produto_detalhe.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<?php include_once("../_incluir/funcoes.php"); ?>
		<main>
			<?php
				if(isset($erro_busca)) {
			?>
				<div>
					<h3><?php echo $erro_busca ?></h3>
				</div>
			<?php
				} else {
			?>
				<div id="detalhe_produto">
					<ul>
						<li class="imagem"><img src="<?php echo $imagemgrande ?>"></li>
						<li><h2><?php echo $nomeproduto ?></h2></li>
						<li><?php echo $descricao ?></li>
						<li>Código de barra: <?php echo $codigobarra ?></li>
						<li>Tempo de entrega: <?php echo $tempoentrega ?> dias</li>
						<li>Preço revenda: <?php echo real_format($precorevenda) ?></li>
						<li>Preço unitário: <?php echo real_format($precounitario) ?></li>
						<li>Estoque: <?php echo $estoque ?></li>
					</ul>
				</div>
			<?php
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