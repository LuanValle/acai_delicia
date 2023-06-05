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
}

$mysqli->close();

header('Location: cadastro.php');

?>