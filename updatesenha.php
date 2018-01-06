<?php

session_start();

if ($_POST ['acao']=="alterar"){
    alterarSenhas();
    }

    function alterarSenhas() {
    $codusuario = $_SESSION["id"];
    $servico = $_POST['servico'];
    $email = $_POST['email'];
    $sql = "UPDATE senhas SET servico ='$servico',"."email ='email' WHERE codusuario = $codusuario";

    $banco->query($sql);
    $banco->close();

}

function selectIdSenhas($codusuario) {
    $sql = "SELECT * FROM senhas WHERE codusuario = $codusuario";
    $resultado = $banco->query($sql);
    $banco->close();
    $gerenciador = mysqli_fetch_assoc($resultado);
    return $gerenciador;

  }

  ?>