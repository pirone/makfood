<?php
session_start ();
include_once '../helpers/auth.php';

if (isset ( $_POST ['fechaPedido'] )) {
	include_once '../helpers/db.php';
	
	$DB = new DB ( 'localhost', 'root', '', 'makfood' );
	
	$DB->query ( '
			INSERT INTO pedidos (usuario, tampizza, preco)
			VALUES (:usuario, :tampizza, :preco)', array (
			':usuario' => $_SESSION ['idusuario'],
			':tampizza' => $_POST ['tampizza'],
			':preco' => $_POST ['total'] 
	) );
	
	$ultimoPedido = $DB->query ( '
			SELECT id FROM pedidos WHERE usuario = :usuario ORDER BY id DESC LIMIT 1', array (
			':usuario' => $_SESSION ['idusuario'] 
	) )->fetch ();
	
	$ingred = $_POST ['ing'];
	foreach ( $ingred as $posing => $nomeing ) {
		$registraIngred = $DB->query ( '
			INSERT INTO pedidos_ingredientes (pedido, ingrediente)
			VALUES (:pedido, :ingrediente)', array (
				':pedido' => $ultimoPedido ['id'],
				':ingrediente' => $nomeing 
		) );
	}
	
	header ( 'Location: ../../pagamento.php?idpedido=' . $ultimoPedido ['id'] );
	die ();
}

?>