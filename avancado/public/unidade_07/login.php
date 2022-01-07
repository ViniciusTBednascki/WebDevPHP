<?php require_once("../../conexao/conexao.php"); ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Unidade 07 - Sistema de Login</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
		<link href="_css/login.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<?php include_once("../_incluir/funcoes.php"); ?>
		<main>
      <div id="janela_login">
        <form action="login.php" method="post">
          <h2>Tela de Login</h2>
          <input type="text" name="usuario" placeholder="Usuário">
          <input type="password" name="senha" placeholder="Senha">
          <input type="submit" value="login">
        </form>
      </div>
		</main>
		<?php include_once("../_incluir/rodape.php"); ?> 
	</body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>