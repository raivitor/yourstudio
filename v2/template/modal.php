<div class="modal fade  bs-example-modal-sm" id="confirmarEnvio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Confirmação de projeto</h4>
			</div>
			<div class="modal-body">
				Olá Fulano da Silva, deseja criar este projeto e está de acordo com os termos do sistema?<br>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Aceito os termos do sistema
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="window.location = 'andamento.php'">Aceito</button>
			</div>
		</div>
	</div>
</div>

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

<div class="modal fade  bs-example-modal-sm" id="confirmarDesigner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Confirmação do designer</h4>
			</div>
			<div class="modal-body">
				Olá NomeDoCliente<br>
				Deseja aceitar o *NomeDoDesign* com o prazo em *X dias* em troca do valor *R$ XX,XX*?<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="window.location = 'gerenciamento.php'">Confirmar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade  bs-example-modal-sm" id="cancelarProjeto" tabindex="-1" role="dialog" aria-labelledby="myModalLabe3">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cancelamento do projeto</h4>
			</div>
			<div class="modal-body">
				Olá NomeDoCliente<br>
				Deseja cancelar o projeto "<strong>NOME DO PROJETO</strong>"<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="window.location = 'home.php'">Confirmar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade  bs-example-modal-sm" id="cancelarDesigner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Confirmação do designer</h4>
			</div>
			<div class="modal-body">
				Olá NomeDoCliente<br>
				Deseja cancelar o contrato com o José da Silva ?<br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Continuar</button>
				<button type="button" class="btn btn-danger" onclick="window.location = 'meuProjeto.php'">Confirmar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade  bs-example-modal-sm" id="concluirProjeto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Concluir Projeto</h4>
			</div>
			<div class="modal-body">
				Olá NomeDoCliente<br>
				Deseja concluir o projeto e realizar o pagamento do designer ?<br><br>
				<small>Ao clicar em concluir será redirecionado para o Paypal onde finalizará o pagamento</small><br>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="window.location = 'home.php'">Concluir</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade  bs-example-modal-sm" id="cadastrarInteresse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
					<input type="checkbox" onclick="botao(this, 'botaoInteresse')"> Aceito os termos do sistema
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" id="botaoInteresse" disabled onclick="window.location = 'andamentoDesigner.php'">Aceito</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade  bs-example-modal-sm" id="cadastrarLance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Confirmação de interesse</h4>
			</div>
			<div class="modal-body">
				Olá Fulano da Silva, submeter essa imagem não garante que será escolhido. Você estará competindo com o outros designers e o criador do projeto pode escolher o que achar melhor.<br>
				<div class="checkbox">
					<label>
					<input type="checkbox" onclick="botao(this, 'botaoInteresse2')"> Aceito os termos do sistema
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" id="botaoInteresse2" disabled onclick="window.location = 'andamentoDesigner.php'">Aceito</button>
			</div>
		</div>
	</div>
</div>