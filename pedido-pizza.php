<?php function header_assets() { ?>
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
					<div  id="massa">
						<ul class="list-group" id="listaTamanho">
							<li class="list-group-item" data-placement="bottom" data-toggle="tooltip" data-trigger="manual" title="Selecione o tamanho!"><strong>Selecione o tamanho da Pizza</strong></li>
							<li class="list-group-item link"><a href="#" data-tam="g">Grande (5 Ingredientes)</a></li>
							<li class="list-group-item link"><a href="#" data-tam="m">Média (3 Ingredientes)</a></li>
							<li class="list-group-item link"><a href="#" data-tam="p">Pequena (2 Ingredientes)</a></li>	
						</ul>
					</div>
					
					<ul class="list-group disabled" id="listaIngredientes">
						<li class="list-group-item"><strong>Selecione os Ingredientes:</strong></li>
						<?php						
						$ingredientes = include 'lib/db/ingredientes.php';
						//$banco = array(0 => array('nome' => 'Tomate', 'preco' => 2.50));
						//foreach($ings as $ing) { $ing['nome']... }
						foreach ($ingredientes as $ingrediente) {
							echo '<li class="list-group-item"><span>'.$ingrediente['nome'].'</span> <img src="lib/img/'.$ingrediente['imagem'].'" /></li>'."\n";
						}
						?>
					</ul>
				</div>
				<div class="col-md-6" id="colunapedido" >
					<form action="lib/ctrl/fechaPedido.php" method="post">
						<div id="fundobrancopedido">
							<center><img id="massapizza" src="lib/img/massa_pizza.png" width="70%" /></center>
					        <h4>Sua pizza é: </h4>
						
							<h5 id="tampizza">
								<span></span>
								<input type="hidden" name="tampizza"/>
							</h5>
							
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
							<div id="total">
								<h2>Total:</h2>
								<span>R$ 0,00</span>
							</div>
							<div>
								<?php if (isLogado()){?>	
									<button type="submit" name="fechaPedido" class="btn btn-primary btn-lg pull-right" style="margin-top:10px"><span class="glyphicon glyphicon-ok" ></span> Fechar pedido</button>
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