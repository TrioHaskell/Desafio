<?php
session_start();

include 'menu.php'
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Cadastro de Senhas
                <small></small>
            </h1>
            
        </section>

        <!-- Main COntent -->
        <section class="content">

            <!-- Formulario de Cadastro -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro</h3>
                    <!-- Form Start -->
                    <form role="form" name="cadform" method="post" action="gravarsenha.php">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Site</label>
                                        <select name="site" class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Site</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Google">Google</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="SnapChat">SnapChat</option>
                                            <option value="Outlook">Outlook</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="pass" name="pass">
                                            <span class="input-group-btn">
                                            
                                                <button id="gerar" type="button" class="btn btn-default" OnClick="generate();">Gerar Senha!</button>
                                                
                                                <script>
                                                function randomPassword(length) {
                                                    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
                                                    var pass = "";
                                                    for (var x = 0; x < length; x++) {
                                                        var i = Math.floor(Math.random() * chars.length);
                                                        pass += chars.charAt(i);
                                                    }
                                                    return pass;
                                                }

                                                function generate() {
                                                    cadform.pass.value = randomPassword(16);
                                                }
                                                </script>
                                            </span>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Gravar</button>
                            </div>
                        </div>
                    </form>
                </div>

                  
</body>

</html>