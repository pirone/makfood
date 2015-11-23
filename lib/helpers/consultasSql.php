<?php function carregaEndereco(){
	include_once 'lib/helpers/db.php';
	include_once 'lib/helpers/auth.php';

	$DB = new DB('localhost', 'root', '', 'makfood');

	$usuario = $DB->query('
			SELECT endereco1 FROM usuario WHERE id = :usuario',
			array(
					':usuario' => $_SESSION['idusuario'],
			))->fetch();
			
			echo $usuario['endereco1'];
}
