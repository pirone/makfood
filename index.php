<?php include 'inc/cabecalho.php'; ?>


<div class="container" id="inicio">
	<div class="row fundobranco">
		<div class="col-md-12" align="center">
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img alt="" src="lib/img/cozinha.jpg" class="img-responsive" id="fundoinicio">
						<div class="carousel-caption">
						<?php if (isset($_GET ['status']) && ($_GET ['status'] == "ok")){?>
							<div><span class="glyphicon glyphicon-ok-circle" id="iconpedok"></span></div>
							<div class="alert alert-success">
								<span>Seu pedido foi realizado com sucesso. Sua pizza será montada e entregue no endereço informado em alguns instantes. Obrigado!</span>
							</div>
							<?php } elseif ((isset($_GET ['status']) && ($_GET ['status'] == "erro"))) {;?>
							<div><span class="glyphicon glyphicon-remove-circle" id="iconpedok"></span></div>
							<div class="alert alert-danger" id="statuserro">
								<span>Ocorreu algum erro, por favor, tente novamente</span>
							</div>
							<?php } else{;?>
							<span id="msgprincipal">MakFood é sua melhor opção para fazer pedidos de comida personalizados! Isso mesmo, com o makFood você pode escolher os ingrentes que estarão no seu pedido!</span>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'inc/rodape.php'; ?>