<?php require_once("../../conexao/conexao.php"); ?>
<?php
	session_start();

	$_SESSION["usuario"] = "vinicius";
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Unidade 07 - Sistema de Login</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<?php include_once("../_incluir/funcoes.php"); ?>
		<main>
			<?php
				echo $_SESSION["usuario"];
			?>
			<p>
				<a href="pagina2.php">Página 2</a>
			</p>
		</main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>