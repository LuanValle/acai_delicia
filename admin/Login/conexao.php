<?php
	$hostname = "sql301.infinityfree.com";
	$bancodedados = "if0_34363641_clientes";
	$usuario = "if0_34363641";
	$senha = "Q8yBZReAG3h";

	$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

	if($mysqli -> connect_errno){
		echo "falha ao conectar:(" . $mysqli->connect_errno .")" . $mysqli->connect_errno;
	}else{
		echo "conectado ao banco de dados";		
	}


?>
