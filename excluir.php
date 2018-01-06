<?php
 if ($_POST ['acao']=="excluir"){
        excluirSenhas();
    }

function excluirSenhas() {
    $banco = abrirBanco();
    $sql = "DELETE FROM gerenciador WHERE id='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();
    voltarTabela();

}

?>