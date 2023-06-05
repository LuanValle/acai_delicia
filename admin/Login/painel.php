<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="painel.css">
		<title>Imperial rent a Car</title>
	</head>
<body>
	<header>
		<nav class="menu_h">
			<ul>
				<li>
					<a href="/../portal/projeto-brilhante-main/index.php">Home</a>
				</li>
				<li>
					<a href="produtos.php">Produtos</a>
				</li>
				<li>
					<a href="http://localhost/projeto1/admin/login/portal.html">Cadastro de Categoria</a>
				</li>
				<li>
					<a href="http://localhost/projeto1/admin/cadastro_veiculos/cadastro_veiculos.html">Cadastro de Veiculos</a>
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





	<main class="conteudo">
		<div>
			<center>
				<p> Açaí Delicia</p>
			</center>
			
			<img src="../../img/frota.png" class="carro_home">

		</div>


		<span>Açaí Delicia</span>
	</main>
	
	<script src="js/custom.js"></script>
</body>
</html>