<?php 
session_start();
if(isset($_POST['email'])){
	if($_POST['email'] == "cliente@gmail.com") $_SESSION['tipo'] = "cliente";
	if($_POST['email'] == "designer@gmail.com")$_SESSION['tipo'] = "designer";
}
if($_SESSION['tipo'] == "cliente"){
	$redirect = "andamento.php";
	echo '
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="home.php">YourStudio</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Meu perfil</a>
					</li>
					<li>
						<a href="novoPedido.php">Novo Pedido</a>
					</li>
					<li>
						<a href="andamento.php">Pedido em andamento</a>
					</li>
					<li>
						<a href="#">Pedidos finalizados</a>
					</li>
					<li>
						<a href="#">Conversas</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
		        	<li><a href="index.php" class="navbar-link" class="navbar-form navbar-left">Logout</a></li>
		    	</ul>
			</div>
			
		</nav>
	';
} elseif ( $_SESSION['tipo'] == "designer"){
	
	$redirect = "projetos.php";
	echo '
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> 
				<a class="navbar-brand" href="home.php">YourStudio</a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a href="#">Meu perfil</a>
					</li>
					<li>
						<a href="projetos.php">projetos</a>
					</li>
					<li>
						<a href="andamentoDesigner.php">projetos em andamento</a>
					</li>
					<li>
						<a href="#">Pedidos finalizados</a>
					</li>
					<li>
						<a href="#">Conversas</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
		        	<li><a href="index.php" class="navbar-link" class="navbar-form navbar-left">Logout</a></li>
		    	</ul>
			</div>
		</nav>
	';
}
?>