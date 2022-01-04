<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Unidade 09 - Ações Condicionais</title>
	</head>
	<body>
		<?php
			$_dia = "domingo";
			$_idade = 18;
			$_sexo = "feminino";
			
			if ($_dia == "sábado" || $_dia == "domingo") {
				if($_idade >= 18 && $_sexo == "feminino") {
					echo "Pode festejar";
				}else {
					echo "Pode descansar";
				};
			} else {
				echo "Dia de trabalho";
			}
		?>
	</body>
</html>