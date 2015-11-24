<?php
include 'inc/cabecalho.php';
include_once 'lib/helpers/db.php';
include_once 'lib/helpers/auth.php';

$DB = new DB ( 'localhost', 'root', '', 'makfood' );
$infoPedidos = $DB->query ( "
	SELECT p.id, p.tampizza, p.preco, ing.id AS iid, DATE_FORMAT(hc.data, '%d/%m/%Y') AS data
	FROM pedidos p
    LEFT JOIN historico_compras hc ON hc.pedido = p.id
    LEFT JOIN pedidos_ingredientes pi ON pi.pedido = p.id
    LEFT JOIN ingredientes ing ON ing.id = pi.ingrediente
	WHERE p.usuario = :usuario
    ORDER BY p.id DESC", array (
		':usuario' => get_userid () 
) )->fetchAll ();

$pedidos = array ();
foreach ( $infoPedidos as $infoPedido ) {
	$pedidos [$infoPedido ['id']] [] = $infoPedido;
}
?>

<div class="container fundobranco" id="meuspedidos">
	<h1>Meus Pedidos</h1>
	<hr>
	<div class="row">
			<?php foreach($pedidos as $pedido) { ?>
			<div class="col-md-12">
			<div class=col-md-3 id="fotopedido">
				<img src="lib/img/pizza-b.png"></img>
			</div>
			<div class="col-md-7 cadapedido">
				<h3>Data do pedido:</h3>
				<h4><?php echo $pedido[0]['data'] ?></h4>
				<h3>Tamanho:</h3>
				<h4><?php echo $pedido[0]['tampizza'] ?></h4>
				<h3>Ingredientes:</h3>
				<h4>
					<?php foreach ($pedido as $ing) { ?>
						<img src="lib/img/<?php echo $ing['iid']; ?>.png" />
					<?php } ?>
					</h4>
				<h3>Valor Total:</h3>
				<h4>R$ <?php echo number_format($pedido[0]['preco'], 2, ',', '.') ?></h4>
			</div>
			<div class="col-md-2">
				<a href="pagamento.php?idpedido=<?php echo $pedido[0]['id'] ?>"
					class="btn btn-primary btn-lg pull-right"><span
					class="glyphicon glyphicon-shopping-cart"></span> Pedir Novamente</a>
			</div>
		</div>
		<hr>
			<?php } ?>
		</div>
	<!--
			<hr><br>
		<div id="meusPedidos"><img src="lib/img/pizza-b.png" width=20% height=auto; style="float:left; margin:0 20px 20px 0;"></img>
					<h3>Data do pedido:</h3> <h4>03/10/2014</h4>
					<h3>Tamanho:</h3> <h4>Grande</h4> 
					<h3>Ingredientes:</h3> <h4>Presunto + Mussarela + Tomate</h4>
					
					<h3>Valor Total:</h3> <h4>R$20,00</h4>
					 
				</div>
				<a type="button" href="pagamento.php" class="btn btn-primary btn-lg pull-right" ><span class="glyphicon glyphicon-shopping-cart" ></span> Pedir Novamente</a>
		</div>
		-->

<?php include 'inc/rodape.php'; ?>