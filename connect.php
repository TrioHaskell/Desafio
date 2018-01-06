<?php

// Inicia a Sessao
session_start();  

// PHP novo não precisa separar a variavel do banco de dados com as demais
// Pode colocar tudo junto!! sendo ("endereco_ip","usuario_mysql","senha_mysql","nome_database")
include 'dbcon.php';

// Verifica os valores via POST e consulta a tabela  
if(isset($_POST['user']))  
{  
    $login=$_POST['user'];  
    $senha=md5($_POST['pass']);  
  
    $check_user="SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        //Guarda a consulta do banco na variavel para criar uma sessão
        $row = mysqli_fetch_array($run, MYSQLI_ASSOC);

        //echo "<script>window.open('welcome.php','_self')</script>";
        $_SESSION["login"] = $row["login"];
        $_SESSION["senha"] = $row["senha"];
        $_SESSION["id"] = $row["codusuario"];
        $_SESSION["nome"] = $row["nome"];
		header('location:welcome.php');
  
    }  
    else  
    {
	  unset ($_SESSION["login"]);
      unset ($_SESSION["senha"]);
      unset ($_SESSION["nome"]); 
      unset ($_SESSION['id']);
      echo "<script>alert('Login or password is incorrect!')</script>";
	  echo "<script>window.open('index.php','_self')</script>";   
    }  
}  
?>
