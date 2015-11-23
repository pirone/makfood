﻿<?php function header_assets() { ?>
<link href="lib/js/plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
<script src="lib/js/plugins/bxslider/jquery.bxslider.min.js"></script>
<script src="lib/js/trocaimagempizza.js"></script>
<?php } ?>
<?php include 'inc/cabecalho.php'; ?>

    <div class="container">	
    		<div id="pizzabanner">
				<ul>
					<?php foreach(range(1, 6) as $i) {?>
					<li><img id="pizzabanner" src="lib/img/pizza_banner<?php echo $i; ?>.jpg"/></li>
					<?php } ?>
				</ul>
			</div>
			<div class="row" id="ingpizza">
				<div class="col-md-6">
					<div id="massa">
						<ul class="list-group" id="listaTamanho">
							<li class="list-group-item disabled" data-placement="bottom" data-toggle="tooltip" data-trigger="manual" title="Selecione o tamanho!"><strong>Selecione o tamanho da Pizza</strong></li>
							<li class="list-group-item" data-tam="g">Grande (5 Ingredientes)
								<span class="badge">R$ 10,00</span>
							</li>
							<li class="list-group-item" data-tam="m">Média (3 Ingredientes)
								<span class="badge">R$ 7,00</span>
							</li>
							<li class="list-group-item" data-tam="p">Pequena (2 Ingredientes)
								<span class="badge">R$ 4,00</span>
							</li>	
						</ul>
					</div>
					
					<ul class="list-group" id="listaIngredientes">
						<li class="list-group-item disabled"><strong>Selecione os Ingredientes:</strong></li>
						<?php						
						$ingredientes = include 'lib/db/ingredientes.php';
						//$banco = array(0 => array('nome' => 'Tomate', 'preco' => 2.50));
						//foreach($ings as $ing) { $ing['nome']... }
						foreach ($ingredientes as $ingrediente) {
							echo '<li class="list-group-item"><span>'.$ingrediente['nome'].'</span> <img src="lib/img/'.$ingrediente['imagem'].'" /><span class="badge">R$ '.$ingrediente['preco'].'</span></li>'."\n";
						}
						?>
					</ul>
				</div>
				<div class="col-md-6 fundobranco" id="colunapedido" >
					<form action="lib/ctrl/fechaPedido.php" method="post">
						<div>
							<div align="center">
								<img id="massapizza" src="lib/img/massa_pizza.png" width="70%" />
							</div>
							
							<table class="table table-striped" id="tampizza">
								<thead>
									<tr>
										<th class="col-md-5">Sua pizza é:</th>
										<th class="col-md-1">Valor</th>
									</tr>
								</thead>
								<tbody>
									
								
								</tbody>
							</table>

							<table class="table table-bordered" id="ingadd">
								<thead>
		  							<tr>
		  								<th class="col-md-3">Ingrediente</th>
		  								<th class="col-md-1">Imagem</th>
		  								<th class="col-md-1">Valor</th>
		  								<th class="col-md-1">Remover</th>
		  							</tr>
		  						</thead>
		  						<tbody>
		
		  						</tbody>
							</table>
							<hr>
							<div align="right" class="col-md-12 form-group" id="total">
								<h2>Total:</h2>
								<label class="col-md-8 control-label" for="total">R$</label>
								<div class="col-md-4" id="divtotalpizza">
									<input class="form-control" name="total" id="totalpizza" value="" readonly="readonly"/>
								</div>
							</div>
							<div class="col-md-12" align="right" id="fecharPedido">
								<?php if (isLogado()){?>	
									<button type="submit" name="fechaPedido" class="btn btn-primary btn-lg" style="margin-top:10px"><span class="glyphicon glyphicon-ok" ></span> Fechar pedido</button>
								<?php } else {?>
									<div id="msgnaologado" class="alert alert-info" role="alert"><strong>É necessário estar logado para fechar o pedido!</strong></div>
								<?php };?>
							</div>
						</div>
					</form>
				</div>
			</div>
	</div>

<script type="text/javascript" src="lib/js/pizza.js"></script>	
<script type="text/javascript" src="lib/js/pedido-pizza.js"></script>	
<?php include 'inc/rodape.php'; ?>