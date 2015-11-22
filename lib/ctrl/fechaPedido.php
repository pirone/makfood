<?php
session_start();
include_once '../helpers/auth.php';

if(isset($_POST['fechaPedido'])){
	include_once '../helpers/db.php';
	
	$DB = new DB('localhost', 'root', '', 'makfood');
	
	$registraPedido = $DB->query('
			INSERT INTO pedidos (idusuario,tampizza,preco,pago)
			VALUES (:idusuario,:tampizza,:preco,:pago)', 
			array(
				':idusuario' => $_SESSION['idusuario'],
				':tampizza' => $_POST['tampizza'],
				':preco' => '',
				':pago' => 'N',		
			));
	
	$selecLastPedido = $DB->query('
			SELECT MAX(idpedido) FROM pedidos WHERE idusuario = :idusuario', 
			array(
				':idusuario' => $_SESSION['idusuario'],	
			));
	$ultimoPedidoLinha = $selecLastPedido->fetch(PDO::FETCH_NUM);
	$ultimoPedido = $ultimoPedidoLinha['0'];
	echo $ultimoPedido;
	
	$ingred = $_POST['ing'];
	foreach ($ingred as $posing => $nomeing) {
		$registraIngred = $DB->query('
			INSERT INTO pedido_ingredientes (idpedido,nomeingred)
			VALUES (:idpedido,:nomeingred)',
				array(
						':idpedido' => $ultimoPedido,
						':nomeingred' => $nomeing,
		
				));
	}
	
	$imging="";
	$nomeing="Tomate";
	function loadImagem(){
			global $imging;
			
			$imging="lib/img/Tomate.jpeg";

	}
	
	loadImagem();
	
/*	$imgingred = $_POST['imging'];
	foreach ($imgingred as $posimg => $localimg) {
		$registraImg = $DB->query('
			INSERT INTO pedido_ingredientes (imgingred)
			VALUES (:imgingred) WHERE idpedido = :idpedido',
				array(
						':imgingred' => $localimg,
						':idpedido' => $ultimoPedido,
				));
	}*/
	
	header('Location: ../../pagamento.php?idpedido='.$ultimoPedido);
	
	
	
}
	
?>