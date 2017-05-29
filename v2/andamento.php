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

		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<h3 class="text-center">
				Olá, Fulano
			</h3>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-1 control-label">
						Pesquisar
					</label>
					<div class="col-sm-11">
						<input type="email" class="form-control" id="inputEmail3" />
						<button type="submit" class="btn btn-default">
							Buscar
						</button>
					</div>
				</div>
			</form>
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>Projeto</th>
						<th>Prazo</th>
						<th>Designer</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="meuProjeto.php">Deixar as cores da minha camisa mais vivas</a></td>
						<td>3 dias</td>
						<td>- - - </td>
						<td><span class="label label-primary">Esperando designers</span></td>
					</tr>
					<tr>
						<td><a href="gerenciamento.php">Tirar espinha do rosto</a></td>
						<td>6 dias</td>
						<td>Mr. M</td>
						<td><span class="label label-success">Andamento</span></td>
					</tr>
					<tr>
						<td>Deixar as cores da minha camisa mais vivas</td>
						<td>3 dias</td>
						<td>José Silva</td>
						<td><span class="label label-warning">Esperando pagamento</span></td>
					</tr>
					<tr>
						<td>Quero dentes mais brancos</td>
						<td>6 atrás</td>
						<td>Aquiles Morais</td>
						<td><span class="label label-danger">Atrasado</span></td>
					</tr>	
				</tbody>
			</table>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>