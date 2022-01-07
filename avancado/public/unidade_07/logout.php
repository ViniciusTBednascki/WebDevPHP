<?php require_once("../../conexao/conexao.php"); ?>
<?php
	session_start();
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
        if( isset($_SESSION["usuario"])) {
          unset($_SESSION["usuario"]);
        }

				session_destroy();
      ?>
      <p>
        <a href="pagina1.php">Página 1</a>
      </p>
		</main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>