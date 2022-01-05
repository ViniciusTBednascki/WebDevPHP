<?php
	require_once("../../conexao/conexao.php");
	
	$consulta_produtos  = "SELECT nomeproduto, precounitario, tempoentrega";
	$consulta_produtos .= " FROM produtos";
	// $consulta_produtos .= " where tempoentrega = 5";
	$produtos = mysqli_query($conexao, $consulta_produtos);

	if(!$produtos) {
		die("Falha na consulta ao banco de dados");
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>unidade 03 - Apis de conexão</title>
	</head>
	<body>
		<ul>
			<?php
				while($produto = mysqli_fetch_assoc($produtos)) {
			?>
				<li><?php echo $produto["nomeproduto"] ?></li>
			<?php
				}
			?>
		</ul>
		<?php
			mysqli_free_result($produtos);
		?>
	</body>
</html>
<?php
	mysqli_close($conexao);
?>