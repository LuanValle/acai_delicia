<!-- exclusao_conta.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Exclusão de conta</title>
</head>
<body>
    <h2>Exclusão de conta</h2>
    <p>Tem certeza de que deseja excluir sua conta?</p>
    <form method="POST" action="excluir_conta.php">
        <input type="email" name="email" placeholder="Digite seu email" required>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <input type="submit" value="Excluir conta">
    </form>
</body>
</html>
