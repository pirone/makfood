<?php
session_start();
include_once '../helpers/db.php';
include '../helpers/auth.php';

header('Content-type: text/plain');
if (!isLogado()) {		
	$DB = new DB('localhost', 'root', '', 'makfood');

	$usuarioQuery = $DB->query(
			'SELECT nome FROM usuario WHERE email = :email AND senha = SHA1(:senha)',
			array(':email' => $_POST['username'], ':senha' => $_POST['password'])
		);

	if ($usuarioQuery->rowCount() == 1) {
		$usuario = $usuarioQuery->fetch();
		$_SESSION['logado'] = true;
		$_SESSION['nome'] = $usuario['nome'];
		echo '1';
	} else {
		echo '0';
	}
}