<?php require_once("../../conexao/conexao.php"); ?>
<?php
	// Determinar localidade BR
	setlocale(LC_ALL, 'pt_BR');
	
	// Consulta ao banco de dados
	$produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena";
	$produtos .= " FROM produtos";
	$resultado = mysqli_query($conexao, $produtos);
	
	if(!$resultado) {
		die("Falha na consulta ao banco de dados");
	}
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 04 - Listagem de Produtos</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
		<link href="_css/produtos.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<?php include_once("../_incluir/funcoes.php"); ?>
		<main>
			<div id="listagem_produtos">
				<?php
					while($linha = mysqli_fetch_assoc($resultado)) {
				?>
					<ul>
						<li class="imagem"><img src="<?php echo $linha["imagempequena"] ?>"></li>
						<li><h3><?php echo $linha["nomeproduto"] ?></h3></li>
						<li>Preço unitário: <?php echo real_format($linha["precounitario"]) ?></li>
						<li>Tempo entrega: <?php echo $linha["tempoentrega"] ?> dias</li>
					</ul>
				<?php
					}
				?>
			</div>
		</main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
	// Fechar conexao
	mysqli_close($conexao);
?>