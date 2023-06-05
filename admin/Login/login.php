<?php
include ('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

	if(strlen($_POST['email'])==0){
		echo "Preencha seu e-mail";
	}else if(strlen($_POST['senha']) == 0){
		echo "Preencha sua senha";
	}else{

		$email = $mysqli->real_escape_string($_POST['email']);
		$senha = $mysqli->real_escape_string($_POST['senha']);

		$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$sql_query = $mysqli->query($sql_code) or die("falha na execução do codigo SQL: " .$mysqli->error);

		$quantidade = $sql_query->num_rows;

		if($quantidade == 1){

			$usuario = $sql_query->fetch_assoc();
			if(!isset($_SESSION)){
				session_start();
			}

			$_SESSION['id'] = $usuario['id'];
			$_SESSION['email'] = $usuario['email'];

			header("Location: painel.php");

		}else{
			echo "Falha ao logar! Email ou senha incorretos";
		}


	}
}

?>
<!DOCTYPE html>

<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="login.css">
	
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="POST" action="">

			<div><h1>Açaí Delicia</h1></div>

				<div class="agrupamento_login">

					<div>

						<div><label>Digite seu login</label></div>	

						<div><input type="text" id="nome_login" name="email" required autofocus></div>

						<div><label>Digite sua senha</label></div>

						<div><input type="password" id="senha_login" name="senha" required></div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="Entrar"></div>

					</div>

					<div>

						<img src="../../img/login_acai.png" class="logo_login">

					</div>


				</div>

		</form>


		



</body>

</html>