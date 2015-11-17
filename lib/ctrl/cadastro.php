<?php
include_once '../helpers/dbconnect.php';

if (isset ($_POST['cadastrar'])) {
	$login = mysql_real_escape_string ( $_POST ['login'] );
	$senha = sha1 ( mysql_real_escape_string ( $_POST ['senha'] ) ); 
	$nome = mysql_real_escape_string ( $_POST ['nome'] );
	$sobrenome = mysql_real_escape_string ( $_POST ['sobrenome'] );
	$endereco1 = mysql_real_escape_string ( $_POST ['endereco'] );
	$telefoneSemMascara = preg_replace("/[()-]/", '', $_POST['telefone']);
	
	header("Content-type: text/html;charset=ISO-8859-1");
	echo mysql_query("INSERT INTO usuario(email,senha,nome,sobrenome,endereco1,telefone) VALUES('$login','$senha','$nome','$sobrenome',
			'$endereco1','$telefoneSemMascara')")
		? '<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Cadastrado com sucesso!</div>'
		: '<div class="alert alert-danger"><i class="glyphicon glyphicon-remove"></i> Um erro ocorreu, por favor, tente novamente.</div>';
} else {
	echo '<div class="alert alert-warning"><i class="glyphicon glyphicon-exclamation-sign"></i> O formulário não foi preenchido corretamente.</div>';
}