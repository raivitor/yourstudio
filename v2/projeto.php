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
  					Total de lances: 10
				</div>
				<div class="col-md-4 card2">
  					Média dos lances: R$ 50,00
				</div>
				<div class="col-md-5 card2">
  					Variação de preços: R$ 5,00 ~ R$ 100,00
				</div>
						<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>Designer</th>
						<th>Prazo</th>
						<th>Lances</th>
						<th>Reputação</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="designer.php">Designer 1</a></td>
						<td>6 dias</td>
						<td>R$ 5,00</td>
						<td>* * * * *</td>
					</tr>
					<tr>
						<td><a href="designer.php">Designer 1</a></td>
						<td>6 dias</td>
						<td>R$ 5,00</td>
						<td>* * * * *</td>
					</tr>	
					<tr>
						<td><a href="designer.php">Designer 1</a></td>
						<td>6 dias</td>
						<td>R$ 5,00</td>
						<td>* * * * *</td>
					</tr>		
				</tbody>
			</table>
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
				    	<label for="inputEmail3" class="col-sm-2 control-label">Lance</label>
				    	<div class="col-sm-5">
				      		<input type="text" class="form-control" id="inputEmail3" placeholder="R$ 00,00">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">Prazo</label>
				    	<div class="col-sm-5">
				    		<select class="form-control" class="form-control" id="inputPassword3">
							  <option>1</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
				    	</div>
				  	</div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-5">
				      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Cadastrar Interesse</button>
				    </div>
				  </div>
				</form>

				<!-- Modal -->
				<div class="modal fade  bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Confirmação de interesse</h4>
				      </div>
				      <div class="modal-body">
				        Olá Fulano da Silva, deseja confirmar o interesse no Projeto 1 com prazo de X dias em troca do valor R$ xx,xx ?<br>
				        <div class="checkbox">
						    <label>
						      <input type="checkbox"> Aceito os termos do sistema
						    </label>
  						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				        <button type="button" class="btn btn-primary">Aceito</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>