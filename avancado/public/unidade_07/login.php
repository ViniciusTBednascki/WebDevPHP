<?php require_once("../../conexao/conexao.php"); ?>
<?php
  session_start();

	if(isset($_POST["submit"]) && $_POST["submit"] == "login") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $login = "SELECT *";
    $login .= " FROM clientes";
    $login .= " WHERE usuario = '{$usuario}'";
    $login .= " and senha = '{$senha}'";

    $acesso = mysqli_query($conexao, $login);
    if(!$acesso) {
      $erro_busca = "Falha no acesso ao banco";
    }

    $informacao = mysqli_fetch_assoc($acesso);
    if(empty($informacao)) {
      $erro_busca = "Autenticação inválida";
    } else {
      $_SESSION["user_portal"] = $informacao["clienteID"];
      header("location: listagem.php");
    }
  }
?>
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
          <input type="submit" name="submit" value="login">

          <?php
            if(isset($erro_busca)) {
          ?>
            <p><?php echo $erro_busca ?></p>
          <?php
            }
          ?>
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