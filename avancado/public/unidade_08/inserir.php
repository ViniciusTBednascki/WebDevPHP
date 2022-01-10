<?php require_once("../../conexao/conexao.php"); ?>
<?php
	// Determinar localidade BR
	setlocale(LC_ALL, 'pt_BR');
	
	$consulta = "SELECT estadoID, nome";
	$consulta .= " FROM estados";
	$lista_estados = mysqli_query($conexao, $consulta);
	if(!$lista_estados) {
		die("Erro no banco");
	}

	if(isset($_POST["nometransportadora"])) {
		
	}
?>

<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 08 - Inserindo dados no B.D.</title>
		
		<!-- estilo -->
		<link href="_css/estilo.css" rel="stylesheet">
		<link href="_css/crud.css" rel="stylesheet">
	</head>

	<body>
		<?php include_once("../_incluir/topo.php"); ?>
		<main>
			<div id="janela_formulario">
				<form action="inserir.php" method="post">
					<input type="text" name="nometransportadora" placeholder="Nome da transportadora">
					<input type="text" name="endereco" placeholder="Endereço">
					<input type="text" name="telefone" placeholder="Telefone">
					<input type="text" name="cidade" placeholder="Cidade">
					<select name="estados">
						<?php
							while($estado = mysqli_fetch_assoc($lista_estados)) {
						?>
							<option value="<?php echo $estado["estadoID"] ?>">
								<?php echo $estado["nome"] ?>
							</option>
						<?php
							}
						?>
					</select>
					<input type="text" name="cep" placeholder="Cep">
					<input type="text" name="cnpj" placeholder="Cnpj">
					<input type="submit" value="inserir">
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