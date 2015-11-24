<?php
session_start ();
if (isset ( $_POST ['salvarNomes'] )) {
	include_once '../helpers/db.php';
	
	$DB = new DB ( 'localhost', 'root', '', 'makfood' );
	
	$nome = $DB->query ( '
			UPDATE usuario SET nome=:novonome, sobrenome=:novosobrenome WHERE id = :idusuario
		', array (
			':novonome' => $_POST ['novonome'],
			':novosobrenome' => $_POST ['novosobrenome'],
			':idusuario' => $_SESSION ['idusuario'] 
	) );
}
session_reset;
header ( 'Location: ../../altNome.php' );
echo 'Alterado com sucesso.'?>