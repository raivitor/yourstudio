<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include ("template/head.php") ?>
  	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	
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
				<div class="col-md-8">
					<div class="checkbox">
					    Ativar notificações por email <input type="checkbox" checked data-toggle="toggle">
					</div>
					<div class="checkbox">
					    Aceitar  <input type="checkbox" checked data-toggle="toggle">
					</div>	

					<div class="checkbox">
					    Teste <input type="checkbox" checked data-toggle="toggle">
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  </body>
</html>