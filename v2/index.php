<!DOCTYPE html>
<html lang="en">
<head>
	<?php include ("template/head.php") ?>
	<style type="text/css">
		
		body{
			background: #cccccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<h4>Acessos: <br>
		cliente@gmail.com - cliente <br>
		designer@gmail.com - designer</h4>
		<form action="home.php" method="post" class="form-signin">
			<h2 class="form-signin-heading">Login</h2>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar!</button>
		</form>

	</div> <!-- /container -->

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>