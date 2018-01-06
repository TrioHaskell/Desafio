<?php
session_start();
include 'dbcon.php';

//Pega o codusuario da SESSION
$codusuario = $_SESSION["id"];

// Query
$sql = "SELECT * FROM senhas WHERE codusuario = $codusuario";

$result = mysqli_query($dbcon,$sql);

if(mysqli_num_rows($result))
{
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
else
{
    echo "<script>alert('Nenhum dado encontrado!')</script>";
    header('location:welcome.php');
}

mysqli_close($dbcon);
?>