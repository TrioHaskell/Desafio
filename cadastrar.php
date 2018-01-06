<?php 


 ?>
 <meta charset="UTF-8">
 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>  
    .login-panel {  
        margin-top: 200px;  
  
</style>  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-primary">  
                <div class="panel-heading">  
                 <h3 class="panel-title">Cadastro</h3>  
                </div>  
                <div class="panel-body">  
                    <form name="formulario" action="conecta.php" method="POST">
                <fieldset>  
                     <div class="form-group">  
                        <input class="form-control" placeholder="Nome" name="nome" type="nome" autofocus>  
                     </div>  
                     <div class="form-group"> 
                        <input class="form-control" placeholder="Login" name="login" type="login" autofocus>  
                     </div> 
                     <div class="form-group">  
                       <input class="form-control" placeholder="Senha" name="senha" type="password" value="">  
                     </div>  
                        <input type="hidden" name="acao" value="inserir">
                        <input class="btn btn-lg btn-primary  btn-block" type="submit" value="Enviar" name="Enviar" >  
</form>


</body>


</html>