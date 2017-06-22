<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include ("template/head.php") ?>
  	<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
	
  </head>
  <body>
  	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php include("template/navbar.php") ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
			</div>
			<form>
				<div class="col-md-8" >
					<h1 class="text-center">Configurações da conta</h1>
					<div class="">
						<div class="" id="tabs-656256">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#pessoal" data-toggle="tab">Perfil</a>
								</li>
								<li>
									<a href="#notificacoes" data-toggle="tab">Notificações</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="pessoal">
									<form>
										<div class="form-group">
										    <label for="inputNome">Nome</label>
										    <input type="email" class="form-control" id="inputNome" placeholder="Nome Completo">
										</div>
										<div class="form-group">
										    <label for="exampleInputEmail">Email</label>
										    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
										</div>
										<div class="form-group">
										    <label for="exampleInputPassword1">Password</label>
										    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</form>
								</div>
								<div class="tab-pane" id="notificacoes">
									<div class="checkbox">
								    	Receber notificações de projetos urgentes <input type="checkbox" checked data-toggle="toggle" data-on="Sim" data-off="Não">
									</div>
									<div class="checkbox">
									    Ficar visível para pessoas que não trabalharam com você <input type="checkbox" checked data-toggle="toggle" data-on="Sim" data-off="Não">
									</div>	
									<div class="checkbox">
									    Receber notificação a cada atualização de projeto <input type="checkbox" checked data-toggle="toggle" data-on="Sim" data-off="Não">
									</div>
									
									<div>
										<label data-toggle="tooltip" data-placement="bottom" title="No modo férias o usuário fica sem receber nenhuma notificação e fica invisível para ser escolhido como designer de projeto." style="font-weight: 500">
							    			Férias
							    		</label>
										 <input type="checkbox" data-toggle="toggle" data-on="Sim" data-off="Não">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="col-md-2">
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap-toggle.min.js"></script>
  </body>
</html>