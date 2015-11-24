<?php
session_start ();
include_once '../helpers/auth.php';
include_once '../helpers/db.php';

$DB = new DB ( 'localhost', 'root', '', 'makfood' );

$ultimoID = $DB->query ( '
			SELECT id FROM pedidos WHERE usuario = :usuario ORDER BY id DESC LIMIT 1', array (
		':usuario' => $_SESSION ['idusuario'] 
) )->fetch ();

$pagamento = $DB->query ( '
			UPDATE pedidos SET pago = "S"
			WHERE id=:idpedido', array (
		':idpedido' => $ultimoID ['id'] 
) );

$historico = $DB->query ( '
			INSERT into historico_compras (pedido, valor_pago, endereco_entrega, nome_cartao, numero_cartao, mes_venc, ano_venc, cvv)
			VALUES (:pedido, :valor_pago, :endereco_entrega, :nome_cartao, :numero_cartao, :mes_venc, :ano_venc, :cvv)', array (
		':pedido' => $ultimoID ['id'],
		':valor_pago' => $_POST ['total'],
		':endereco_entrega' => $_POST ['endentrega'],
		':nome_cartao' => $_POST ['nomecartao'],
		':numero_cartao' => $_POST ['numcartao'],
		':mes_venc' => $_POST ['mesvenc'],
		':ano_venc' => $_POST ['anovenc'],
		':cvv' => $_POST ['cvv'] 
) );

if ($pagamento->rowCount () == 1) {
	header ( "Location: ../../index.php?status=ok" );
} else {
	header ( "Location: ../../index.php?status=erro" );
}

?>