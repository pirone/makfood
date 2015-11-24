<?php 
include_once 'lib/helpers/db.php';
include_once 'lib/helpers/auth.php';

function carregaEndereco(){

	$DB = new DB('localhost', 'root', '', 'makfood');

	$usuario = $DB->query('
			SELECT endereco1 FROM usuario WHERE id = :usuario',
			array(
					':usuario' => $_SESSION['idusuario'],
			))->fetch();
			
			echo $usuario['endereco1'];
}

function carregaIngredientes(){
	
	$DB = new DB('localhost', 'root', '', 'makfood');
	
	$ingredientes = $DB->query('
			SELECT nome, id, preco FROM ingredientes')->fetchAll();
	foreach ($ingredientes as $row){
		echo '<li class="list-group-item"><span>'.$row['nome'].'</span><span hidden="hidden">'.$row['id'].'</span> <img src="lib/img/'.$row['id'].'.png" /><span class="badge">R$ '.$row['preco'].'</span></li>'."\n";
		
	}
}

function carregaPreco(){

	$DB = new DB('localhost', 'root', '', 'makfood');

	$pedido = $DB->query('
			SELECT preco FROM pedidos WHERE id = :idpedido',
			array(
					':idpedido' => $_GET['idpedido'],
			))->fetch();
				
			echo $pedido['preco'];
}

function carregaNome(){

	$DB = new DB('localhost', 'root', '', 'makfood');

	$usuario = $DB->query('
			SELECT nome FROM usuario WHERE id = :idusuario',
			array(
					':idusuario' => $_SESSION['idusuario'],
			))->fetch();

			echo $usuario['nome'];
}

function carregaSobrenome(){

	$DB = new DB('localhost', 'root', '', 'makfood');

	$usuario = $DB->query('
			SELECT sobrenome FROM usuario WHERE id = :idusuario',
			array(
					':idusuario' => $_SESSION['idusuario'],
			))->fetch();
	
			echo $usuario['sobrenome'];
}

