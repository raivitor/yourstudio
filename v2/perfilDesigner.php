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
			<div class="col-md-5" >
				<p class="text-right">
					<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:900%"></span>
				</p>
				
			</div>
			<div class="col-md-5">
				Maria do Lorem Ipsum da Silva 
				<label data-toggle="tooltip" data-placement="bottom" title="Usuário com alta classificação e pontualidade. Está apto a receber pedidos urgentes.">
			    	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
			    </label>
				<br>

				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span> <br>
			    Pontualidade: 80% 
				
			</div>
		</div>
		
		<div class="row">
			<hr>
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<table class="table table-bordered">
				  	<thead>
						<tr>
							<th></th>
							<th>Comentário</th>
							<th>Prazo</th>
							<th>Avaliação</th>
							<th>Projeto</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td align="center">
								<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span>
								Designer 1
							</td>
							<td><h4>Título</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis ante ut augue ornare ornare. Nunc nec vulputate tortor, in fermentum tortor. Duis risus nulla, molestie ac leo ut, porta cursus leo. </td>
							<td class="prazo">2 dias antes</td>
							<td class="prazo">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span></td>
						</tr>

						<tr>
							<td align="center">
								<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span>
								Designer 2
							</td>
							<td><h4>Título</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis ante ut augue ornare ornare. Nunc nec vulputate tortor, in fermentum tortor. Duis risus nulla, molestie ac leo ut, porta cursus leo. </td>
							<td class="prazo">3h depois</td>
							<td class="prazo">
								
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span></td>
						</tr>

						<tr>
							<td align="center">
								<span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span>
								Designer 3
							</td>
							<td><h4>Título</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis ante ut augue ornare ornare. Nunc nec vulputate tortor, in fermentum tortor. Duis risus nulla, molestie ac leo ut, porta cursus leo. </td>
							<td class="prazo">4 dias depois</td>
							<td class="prazo">
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
							<td><span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size:300%"></span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>