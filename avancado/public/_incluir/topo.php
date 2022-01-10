<header>
	<div id="header_central">
		<?php
			if(isset($_SESSION["user_portal"])) {
				$user = $_SESSION["user_portal"];

				$query = "SELECT *";
				$query .= " FROM clientes";
				$query .= " WHERE clienteID = '{$user}'";
		
				$saudacao_login = mysqli_query($conexao, $query);
				if(!$saudacao_login) {
					$erro_busca = "Falha no acesso ao banco";
					$nome = "";
				} else {
					$saudacao_info = mysqli_fetch_assoc($saudacao_login);
					$nome = $saudacao_info["nomecompleto"];
				}
		?>
			<div id="header_saudacao">
				<h5>
					Bem vindo, <?php echo $nome ?> - <a href="sair.php">Sair</a>
				</h5>
			</div>
		<?php
			}
		?>
		<img src="../_assets/logo_andes.gif">
		<img src="../_assets/text_bnwcoffee.gif">
	</div>
</header>