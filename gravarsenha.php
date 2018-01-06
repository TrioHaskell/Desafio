<?php
//Inicia a Sessão
session_start();

// PHP novo não precisa separar a variavel do banco de dados com as demais
// Pode colocar tudo junto!! sendo ("endereco_ip","usuario_mysql","senha_mysql","nome_database")
include 'dbcon.php';

//Função que insere a senha no banco de dados
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
} 

$id = $_SESSION['id'];
$servico = $_POST['site'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$insert_pass = "INSERT INTO senhas (servico, email, senha, codusuario) VALUES ('$servico', '$email', '$pass', '$id')";


if(!mysqli_query($dbcon,$insert_pass))
{
    echo "<script>alert('Erro ao Salvar!')</script>";
	echo "<script>window.open('addsenha.php','_self')</script>";   
}
else
{   
    echo "<script>alert('Senha Salva!')</script>";
	echo "<script>window.open('welcome.php','_self')</script>";
       
}

?>