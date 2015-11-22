<?php
session_start();
if (isset($_POST['salvarNomes'])) {
	include_once '../helpers/db.php';

	$DB = new DB('localhost', 'root', '', 'makfood');

	$nome = $DB->query('
			UPDATE usuario SET nome=:novonome, sobrenome=:novosobrenome WHERE idusuario = :idusuario
		', array(
				':novonome' => $_POST['novoNome'],
				':novosobrenome' => $_POST['novoSobrenome'],
				':idusuario' => $_SESSION['idusuario'],
		));
	
} 
session_reset;
header('Location: ../../altNome.php');
echo 'Alterado com sucesso.'
?>