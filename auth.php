<?php 
	$login = $_POST["usuario"];
	$senha = $_POST["senha"];

	if ($login == "jv" && $senha == "123") {
		session_start();
		$_SESSION["usuario"] = $login;
		$_SESSION["autenticado"] = true;
		header("Location: ./Control/controle.php?acao=listar");
	}else{
		header("Location: index.php?erro=1");
	}
?>