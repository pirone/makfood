<?php function carregaEndereco(){
	include_once 'lib/helpers/db.php';
	include_once 'lib/helpers/auth.php';

	$DB = new DB('localhost', 'root', '', 'makfood');

	$carregaEndereco = $DB->query('
			SELECT endereco1 FROM usuario WHERE idusuario = :idusuario',
			array(
					':idusuario' => $_SESSION['idusuario'],
			));
	$carregaEnderecoLinha = $carregaEndereco->fetch(PDO::FETCH_NUM);
	$endereco = $carregaEnderecoLinha['0'];

	echo $endereco;
}
