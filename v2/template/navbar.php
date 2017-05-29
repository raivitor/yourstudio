<?php 

if($_POST['email'] == "cliente@gmail.com"){
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
			</div>
		</nav>
	';
} else{
	$redirect = "homeDesign.php";
}
?>