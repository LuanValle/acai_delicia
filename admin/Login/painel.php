<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="painel.css">
		<title>Açaí Delicia</title>
	</head>
<body>
	<header>
		<nav class="menu_h">
			<ul>
				<li>
					<a href="http://localhost/portal/acai_delicia/">Home</a>
				</li>
				<li>
					<a href="http://localhost/portal/acai_delicia/cardapio.php">Produtos</a>
				</li>
				<li>
					<a href="http://localhost/projeto1/admin/login/portal.html">Cadastro de produtos</a>
				</li>
				
				
				
			</ul>
		</nav>
	</header>

	
	<form id="cadastro_categoria" name="cadastro_categoria" class="cadastro" method="post" action="Cadastrar.php">

		<div id="formulario">
			<legend>Cadastre a Categoria</legend>	
			<input class="cadastro_produto" type="text" placeholder="nome do produto" id="produto" name="produto" required autofocus>

			<button type="button" onclick="adcionarCampo()">+</button>
		</div>
			
		<div>
			<input class="botao" type="submit" id="btn_entrar" name="action" value="inserir"></div>
		</div>
	</form>





	<script src="js/custom.js"></script>
</body>
</html>