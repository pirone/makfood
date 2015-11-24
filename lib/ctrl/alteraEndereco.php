<?php
session_start();
if (isset($_POST['salvarEndereco'])) {
	include_once '../helpers/db.php';

	$DB = new DB('localhost', 'root', '', 'makfood');

	$endereco = $DB->query('
			UPDATE usuario SET endereco1=:novoendereco WHERE id = :idusuario
		', array(
				':novoendereco' => $_POST['novoendereco'],
				':idusuario' => $_SESSION['idusuario'],
		));

} 
header('Location: ../../altEndereco.php');
echo 'Alterado com sucesso.'
?>