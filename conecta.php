
<?php

    if($_POST['acao']=="inserir") {
    inserirPessoa();
    }


function inserirPessoa () {
	$banco = new mysqli("localhost", "root", "", "sistema");
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	$sql = "INSERT INTO usuario(nome, login, senha)"
			."VALUES ('$nome',  '$login', '$senha')";

	$banco->query($sql);
	$banco->close();
}

	header("Location:login.php");




	
 ?>