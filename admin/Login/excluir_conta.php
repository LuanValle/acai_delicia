<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ...
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para obter o ID e a senha do usuário com base no email
    $query = "SELECT id, senha FROM usuarios WHERE email = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $email);

    if ($stmt->execute()) {
        $stmt->store_result();
        $numRows = $stmt->num_rows;

        if ($numRows === 1) {
            $stmt->bind_result($idUsuario, $senhaHash);

            if ($stmt->fetch()) {
                // Verificar a senha
                if ($senha === $senhaHash) {  // Comparação direta das senhas em texto simples
                    // Excluir a conta do usuário
                    $deleteQuery = "DELETE FROM usuarios WHERE id = ?";
                    $deleteStmt = $mysqli->prepare($deleteQuery);
                    $deleteStmt->bind_param('i', $idUsuario);

                    if ($deleteStmt->execute()) {
                        echo "Conta excluída com sucesso.";
                    } else {
                        echo "Ocorreu um erro ao excluir a conta.";
                    }
                } else {
                    echo "Senha incorreta.";
                }
            }
        } else {
            echo "Email não encontrado.";
        }
    } else {
        echo "Ocorreu um erro ao processar a solicitação.";
    }

    // ...
}
?>


