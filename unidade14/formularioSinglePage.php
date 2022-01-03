<?php
  if(isset($_POST["formulario"])) {
    $_nome = (isset($_POST["nome"])) ? $_POST["nome"] : "Não definido";
    $_email = (isset($_POST["email"])) ? $_POST["email"] : "Não definido";
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="_css/estilo.css" rel="stylesheet">
		<title>Unidade 14 - Formulário</title>
	</head>
	<body>
    <?php if(!isset($_POST["formulario"])) { ?>
      <form action="formularioSinglePage.php" method="post">
        <label for="nome">Nome Completo</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <input type="submit" name="formulario" value="Enviar Cadastro">
      </form>
    <?php } else {
			echo "Nome: $_nome" . "<br>";
			echo "Email: $_email" . "<br>";
    } ?>
	</body>
</html>