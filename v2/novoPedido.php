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
				<img src="" height="200" alt="Image preview...">
			</div>
			<div class="col-md-4">
				<h3>Imagens de referencia</h3>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
				  	<div class="panel-heading">
				    	<h3 class="panel-title">Formulário</h3>
				  	</div>
				  	<div class="panel-body">
				    	Panel content
				    	Minhas imagens <input type="file" onchange="previewFile()"><br>
				    	Imagens referencia <input type="file" onchange="previewFile()"><br>
						
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