<?php
session_start();
include ("conexao.php");

//buscando produto no painel.php
$produto = mysqli_real_escape_string($mysqli, $_POST['produto']);

$sql= "INSERT INTO produtos(nome) VALUES ($nome)";

?>