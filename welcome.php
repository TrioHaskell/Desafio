<?php
session_start();

include 'menu.php';
include 'list.php';
include 'excluir.php';
?>
<div class="container">
	<div class="col-md-12">
		<div class="page-header">
			
		</div>


		<div class="panel panel-success">
			<div class="panel-heading "> 
				<span class=""> Senhas Cadastradas<br>
				 </span>  
			 	
			 	
			 </div>
						 
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
                        <table id="grid" class="table table-condensed table-hover table-striped" width="100%" cellspacing="0" data-toggle="bootgrid">
                            <thead>
                                <tr>
                                    <th data-column-id="servico">Site</th>
                                    <th data-column-id="email">Email</th>
                                    <th data-column-id="senha">Senha</th>
                                    <th data-column-id="comandos">Comandos</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if ($row) : ?>
                            <?php foreach ($row as $r) : ?>
                                    <tr>
                                        <td><?php echo $r['servico']; ?></td>
                                        <td><?php echo $r['email']; ?></td>
                                        <td><?php echo $r['senha']; ?></td>
                                        <td class="actions">
                                            <a href="edit_pass.php?id=<?php echo $r['codpass']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $customer['id']; ?>">
                                                <i class="fa fa-trash"></i> <input type="hidden" name="acao" value="excluir">Excluir
                                            </a>
                                        </td>
                                    </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
						
					</div>
				</div>
			</div>				
		</div>

	</div>
</div>

</body>

</html>
