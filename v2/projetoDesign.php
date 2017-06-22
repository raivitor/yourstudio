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
				      		<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#cancelarProjeto">Aceitar projeto</button>
				    	</div>
				  	</div>
				 
				  	<div class="form-group">
				    	<div class="col-sm-6">
				      		<button type="button" class="btn btn-primary btn-lg btn-block">Recusar projeto</button>
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