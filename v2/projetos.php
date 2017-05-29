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
				Bem vindo, Fulano
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
						<th>Lances</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr class="success" style="border-style: dotted;">
						<td><a href="projeto.php">Deixar as cores da minha camisa mais vivas</a><br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat lectus augue, vitae posuere mauris sodales sit amet. Curabitur quis ipsum turpis. Nullam sit amet risus pharetra, interdum nisl non, dictum mi. Suspendisse laoreet velit vitae dui convallis, ut vestibulum augue sollicitudin. Vivamus tempor, metus vitae fringilla sodales, enim tortor porta leo, ut sagittis velit purus a tellus.</td>
						<td>6 dias</td>
						<td>2</td>
						<td><img src="http://lorempixel.com/100/100/city" /></td>
					</tr>
					<tr>
						<td>Tirar espinha do rosto<br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat lectus augue, vitae posuere mauris sodales sit amet. Curabitur quis ipsum turpis. Nullam sit amet risus pharetra, interdum nisl non, dictum mi. Suspendisse laoreet velit vitae dui convallis, ut vestibulum augue sollicitudin. Vivamus tempor, metus vitae fringilla sodales, enim tortor porta leo, ut sagittis velit purus a tellus.</td>
						<td>6 dias</td>
						<td>2</td>
						<td><img src="http://lorempixel.com/100/100/city" /></td>
					</tr>
					<tr>
						<td>Quero dentes mais brancos<br>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent placerat lectus augue, vitae posuere mauris sodales sit amet. Curabitur quis ipsum turpis. Nullam sit amet risus pharetra, interdum nisl non, dictum mi. Suspendisse laoreet velit vitae dui convallis, ut vestibulum augue sollicitudin. Vivamus tempor, metus vitae fringilla sodales, enim tortor porta leo, ut sagittis velit purus a tellus.</td>
						<td>6 dias</td>
						<td>2</td>
						<td><img src="http://lorempixel.com/100/100/city" /></td>
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