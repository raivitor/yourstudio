<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include ("template/head.php") ?>
  </head>
  <body>
  	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php include("template/navbar.php") ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<h1 style="display: inline;">Título do projeto</h1> &nbsp;&nbsp;&nbsp; 6 dias <br>
				Descrição: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu congue est. Morbi sed dapibus purus. Morbi porta eros suscipit mauris laoreet vehicula. Ut feugiat eleifend dolor, vel fermentum mauris finibus eget. Sed laoreet fringilla est vel ultrices. Proin nec varius magna, vel iaculis quam. Nulla blandit feugiat est, sit amet rutrum erat mattis sit amet. Vivamus vestibulum nisi efficitur, sodales lorem non, euismod magna. Donec id volutpat dolor. Aenean vel risus metus. In dignissim nisi eleifend scelerisque congue. Morbi.

				<br><br>
				<div class="col-md-12 card">
					<div class="container2"> 
						<div class="col-md-3 card2">
		  					Total de lances: 3
						</div>
						<div class="col-md-4 card2">
		  					Média dos lances: R$ 91,66
						</div>
						<div class="col-md-5 card2">
		  					Variação de preços: R$ 50,00 ~ R$ 150,00
						</div>
						<table class="table table-striped table-hover table-condensed">
							<thead>
								<tr>
									<th>Designer</th>
									<th>Prazo</th>
									<th>Lances</th>
									<th>Reputação</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="designer.php">Designer 1</a></td>
									<td>6 dias</td>
									<td>R$ 50,00</td>
									<td>* * * *</td>
									<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelarDesigner">Cancelar</button></td>
								</tr>
								<tr>
									<td><a href="designer.php">Designer 1</a></td>
									<td>6 dias</td>
									<td>R$ 50,00</td>
									<td>* * * *</td>
									<td><button type="button" class="btn btn-success" disabled="disabled">Aceitar</button></td>
								</tr>	
								<tr>
									<td><a href="designer.php">Designer 1</a></td>
									<td>7 dias</td>
									<td>R$ 150,00</td>
									<td>* * * * *</td>
									<td><button type="button" class="btn btn-success" disabled="disabled">Aceitar</button></td>
								</tr>		
							</tbody>
						</table>
					</div>
				</div>
				<br>&nbsp;
				<div class="col-md-12 card">
					<h3>Atualizado por José da Silva - 25/04/2017 às 15h38</h3>
					<p><strong>Comentário:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed ullamcorper eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ac auctor lorem. Mauris mauris libero, mattis non porttitor eu, varius non eros.</p>
					<button type="button" class="btn btn-link">img1.jpg</button> 
					<button type="button" class="btn btn-link">img2.jpg</button>
				</div>
				<br>&nbsp;
				<div class="col-md-12 card">
					<h3>Atualizado por José da Silva - 26/04/2017 às 16h12</h3>
					<p><strong>Comentário:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed ullamcorper eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ac auctor lorem. Mauris mauris libero, mattis non porttitor eu, varius non eros.</p>
					<button type="button" class="btn btn-link">img1.jpg</button> 
				</div>
				<br>&nbsp;
				

				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Atualizar projeto</h3>
				  	</div>
				  	<div class="panel-body">
				    	<form>
					  		<div class="form-group">
					    		<textarea class="form-control" rows="3" placeholder="Comentário"></textarea>
					  		</div>
					  		<div class="form-group">
					    		<input type="file" id="exampleInputFile">
					  		</div>
					  		<button type="submit" class="btn btn-default">Enviar</button>
						</form>
				  	</div>
				</div>
			</div>

			<div class="col-md-5">
				<img class="img-thumbnail" src="http://lorempixel.com/100/100/city" />
				<img class="img-thumbnail" src="http://lorempixel.com/100/100/city" />
				<img class="img-thumbnail" src="http://lorempixel.com/100/100/city" />
				<br> <br>
				<form class="form-horizontal" id="formProjeto" onsubmit="return modalConfirm()">
				  	<div class="form-group">
				    	<div class="col-sm-6">
				      		<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#cancelarProjeto">Cancelar Projeto</button>
				    	</div>
				  	</div>

				  	<div class="form-group">
				    	<div class="col-sm-6">
				      		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#concluirProjeto">Concluir Projeto</button>
				    	</div>
				  	</div>
				</form>
				<?php include('template/modal.php') ?>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>