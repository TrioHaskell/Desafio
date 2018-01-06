<?php
session_start();

// PHP novo não precisa separar a variavel do banco de dados com as demais
// Pode colocar tudo junto!! sendo ("endereco_ip","usuario_mysql","senha_mysql","nome_database")
$dbcon = mysqli_connect("localhost","root","","sistema");
?>