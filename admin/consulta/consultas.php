<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
	
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="post" action="valida_login.php">

			<div><h1>CONSULTAR VEÍCULOS</h1></div>

				<div class="agrupamento_login">

					<div>

						<div><label>Selecione a Categoria</label></div>	
						<div><input type="text" id="categoria_veiculo" name="categoria_veiculos" required autofocus></div>


						<div><label>Selecione a Marca</label></div>	
						<div><input type="text" id="marca_veiculos" name="marca_veiculos" required autofocus></div>


					</div>

				</div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="PESQUISAR"></div>


		</form>


		<nav id="voltar">
			<ul>
				<li>
					<a href="http://localhost/projeto/admin/login/entrada.php">VOLTAR</div></a>
				
				</li>

		</nav>
</body>

</html>