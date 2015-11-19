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
							<li class="list-group-item" data-placement="bottom" title="Selecione o tamanho!"><strong>Selecione o tamanho da Pizza</strong></li>
							<li class="list-group-item link"><a href="#" data-tam="g">Grande (5 Ingredientes)</a></li>
							<li class="list-group-item link"><a href="#" data-tam="m">Média (3 Ingredientes)</a></li>
							<li class="list-group-item link"><a href="#" data-tam="p">Pequena (2 Ingredientes)</a></li>	
						</ul>
					</div>
					
					<ul class="list-group disabled" id="listaIngredientes">
						<li class="list-group-item"><strong>Selecione os Ingredientes:</strong></li>
						<?php						
						$ingredientes = array('Tomate' => 'tomate.jpeg', 'Presunto' => 'presunto.jpg', 'Mussarela' => 'mussarela.png',
											  'Frango' => 'frango.png', 'Bacon' => 'bacon.png', 'Azeitona' => 'azeitona.png', 'Cebola' => 'cebola.png',
											  'Calabresa' => 'calabresa.png', 'Camarão' => 'camarao.png', 'Carne Seca' => 'carneseca.jpg',
											  'Orégano' => 'oregano.jpg', 'Picles' => 'picles.jpg', 'Pimentão' => 'pimentao.png', 'Champignon' => 'champignons.png'
						);
						//$banco = array(0 => array('nome' => 'Tomate', 'preco' => 2.50));
						//foreach($ings as $ing) { $ing['nome']... }
						foreach ($ingredientes as $nome => $imagem ) {
							echo '<li class="list-group-item"><span>'.$nome.'</span> <img src="lib/img/'.$imagem.'" /></li>'."\n";
						}
						?>
					</ul>
				</div>
				
				<div class="col-md-6" id="colunapedido" >
					<form action="pagamento.php" method="post">
						<div id="fundobrancopedido">
							<center><img id="massapizza" src="lib/img/massa_pizza.png" width="70%" /></center>
					        <h4>Sua pizza é: </h4>
						
							<h5> Grande </h5><br>
							
							<table class="table table-bordered" id="ingadd">
								<thead>
		  							<tr>
		  								<th class="col-md-4">Ingrediente</th>
		  								<th class="col-md-1">Imagem</th>
		  								<th class="col-md-1">Remover</th>
		  							</tr>
		  						</thead>
		  						<tbody>
		
		  						</tbody>
							</table>
						</div>
						<div>
							<?php if (isLogado()){?>	
								<button type="submit" name="fechaPedido" class="btn btn-primary btn-lg pull-right" style="margin-top:10px"><span class="glyphicon glyphicon-ok" ></span> Fechar pedido</button>
							<?php } else {?>
								<div id="msgnaologado" class="alert alert-info" role="alert"><strong>É necessário estar logado para fechar o pedido!</strong></div>
							<?php };?>
						</div>
					</form>
				</div>

			</div>
			<div class="row">
				<div class="col-md-6">
				
				</div>
			</div>

	</div>

<script type="text/javascript" src="lib/js/pizza.js"></script>	
<script type="text/javascript" src="lib/js/pedido-pizza.js"></script>	
<?php include 'inc/rodape.php'; ?>