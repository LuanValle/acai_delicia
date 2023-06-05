<!DOCTYPE html>

<html lang="pt-br">
<?php
session_start();
include("admin/Login/conexao.php");

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

if($mysqli->query($sql)== TRUE){
    $_SESSION['status_cadastro']=true;
    echo" sucesso";

}

$mysqli->close();

?>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cadastro</title>

	<!-- ARQUIVO DE ESTILOS DO PORTAL -->
	<link rel="stylesheet" type="text/css" href="admin/Login/login.css">
	
</head>


<body>

		<form id="form_login" name="form_login" class="form_login" method="POST" action="">

			<div><h1>Cadastro Açaí Delicia</h1></div>

				<div class="agrupamento_login">

					<div>

						<div><label>Digite seu email</label></div>	

						<div><input type="text" id="nome_login" name="email" required autofocus></div>

						<div><label>Digite sua senha</label></div>

						<div><input type="password" id="senha_login" name="senha" required></div>

						<div><input type="submit" id="btn_entrar" name="btn_entrar" value="cadastrar"></div>

					</div>




				</div>

		</form>



		



</body>

</html>