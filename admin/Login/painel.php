<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="paine.css">
    <title>Açaí Delicia</title>
</head>
<body>

	<div class="user-info">
		<?php
		session_start();
		if (isset($_SESSION['email'])) {
			echo "<p>Bem-vindo, " . $_SESSION['email'] . "</p>";
			echo "<form action='editar_usuario.php'>";
			echo "<div>";
			echo "<input type='submit' value='Editar Usuário'>";
			echo "</div>";
			echo "</form>";
		} else {
			echo "<p>Sessão não iniciada.</p>";
		}
		?>
		<form action="exclusao_de_conta.php">
			<div>
				<input type="submit" value="Excluir Conta">
			</div>
		</form>
	</div>

</body>
</html>
