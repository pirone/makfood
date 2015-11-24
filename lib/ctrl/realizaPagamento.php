<?php
session_start ();
include_once '../helpers/auth.php';
include_once '../helpers/db.php';

	$DB = new DB ( 'localhost', 'root', '', 'makfood' );
	
	$ultimoPedido = $DB->query ( '
			SELECT id FROM pedidos WHERE usuario = :usuario ORDER BY id DESC LIMIT 1', array (
						':usuario' => $_SESSION ['idusuario']
				) )->fetch ();

	$pagamento = $DB->query ( '
			UPDATE pedidos SET pago = "S"
			WHERE id=:idpedido', array (
					':idpedido' => $ultimoPedido['id']
			) );

	if ($pagamento->rowCount() == 1){
		header("Location: ../../index.php?status=ok");
	} else {
		header("Location: ../../index.php?status=erro");
	}

?>