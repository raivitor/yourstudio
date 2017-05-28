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
		<div class="row" align="center">
			<div class="col-md-4">
				<h3>Imagens adicionadas</h3>
				<input type="file" onchange="previewFile()">
				<img src="" height="200" alt="Image preview...">
			</div>
			<div class="col-md-4">
				<h3>Imagens de referencia</h3>
				<input type="file" onchange="previewFile()">
			</div>
			<div class="col-md-4">
				<div class="panel panel-primary">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Formulário</h3>
				  	</div>
				  	<div class="panel-body">
				  		<form class="form-horizontal">
						  	<div class="form-group">
						    	<input type="text" class="form-control" placeholder="Título">
						  	</div>
						  	<div class="form-group">
						  		<textarea class="form-control" rows="3" placeholder="Descrição"></textarea>
						  	</div>
						  	<div class="form-group">
						  		<label for="inputEmail3" class="col-sm-1 control-label">Prazo</label>
						  		<div class="col-sm-5">
						  			<input type="date" class="form-control" id="inputEmail3">
						  		</div>
						  		<div class="checkbox col-sm-6">
								  	<label data-toggle="tooltip" data-placement="top" title="No modo Urgente o projeto fica aberto para todos os designers e eles podem cobrar mais caro.">
								    	<input type="checkbox" value="" >Urgente
								    </label>
								</div>
						  	</div>
						  	<div class="form-group">
						  		<div>
							      	<button type="submit" class="btn btn-primary">Cadastrar!</button>
							    </div>
						  	</div>
						</form>
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