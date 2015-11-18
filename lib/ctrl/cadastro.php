<?php
if (isset($_POST['cadastrar'])) {
	include_once '../helpers/db.php';
	
	$DB = new DB('localhost', 'root', '', 'makfood');

	$cadastro = $DB->query('
			INSERT INTO usuario (email, senha, nome, sobrenome, endereco1, telefone)
			VALUES (:login, SHA1(:senha), :nome, :sobrenome, :endereco1, :telefoneSemMascara)
		', array(
			':login' => $_POST['login'],
			':senha' => $_POST['senha'],
			':nome' => $_POST['nome'],
			':sobrenome' => $_POST['sobrenome'],
			':endereco1' => $_POST['endereco'],
			':telefoneSemMascara' => preg_replace("/[()-]/", '', $_POST['telefone'])
		));
	
	header("Content-type: text/html;charset=ISO-8859-1");
	echo $cadastro->rowCount() == 1
		? '<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Cadastrado com sucesso!</div>'
		: '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove"></i> Um erro ocorreu, por favor, tente novamente.</div>';
} else {
	echo '<div class="alert alert-warning"><i class="glyphicon glyphicon-exclamation-sign"></i> O formulário não foi preenchido corretamente.</div>';
}