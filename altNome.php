<?php //include 'lib/helpers/auth.php'; ?>
<?php include 'inc/auth.php'; ?>
<?php include 'cpanel.php'?>

<?php function carregaNome(){
	include_once 'lib/helpers/db.php';
	include_once 'lib/helpers/auth.php';
	
	$DB = new DB('localhost', 'root', '', 'makfood');
	
	$carregaNome = $DB->query('
			SELECT nome FROM usuario WHERE idusuario = :idusuario',
			array(
					':idusuario' => $_SESSION['idusuario'],
			));
	$carregaNomeLinha = $carregaNome->fetch(PDO::FETCH_NUM);
	$nome = $carregaNomeLinha['0'];
	
	echo $nome;
}

function carregaSobrenome(){
	include_once 'lib/helpers/db.php';
	include_once 'lib/helpers/auth.php';

	$DB = new DB('localhost', 'root', '', 'makfood');

	$carregaSobrenome = $DB->query('
			SELECT sobrenome FROM usuario WHERE idusuario = :idusuario',
			array(
					':idusuario' => $_SESSION['idusuario'],
			));
	$carregaSobrenomeLinha = $carregaSobrenome->fetch(PDO::FETCH_NUM);
	$Sobrenome = $carregaSobrenomeLinha['0'];

	echo $Sobrenome;
}
?>
	<div class="col-md-9 fundobranco">
		<h2>Alterar Nome e Sobrenome</h2>
		<hr>
		<div class="form-group">
			<label class="control-label" for="nomeatual">Nome Cadastrado:</label>
			<input class="form-control" disabled="disabled" type="text" name="nomeatual" value="<?php carregaNome()?>"></input>
		</div>
		<div class="form-group">
			<label class="control-label" for="sobrenomeatual">Sobrenome Cadastrado:</label>
			<input class="form-control" disabled="disabled" type="text" name="sobrenomeatual" value="<?php carregaSobrenome()?>"></input>
		</div>
		<form action="lib/ctrl/alteraNome.php" method="post">
			<div class="form-group">
				<label class="control-label" for="novonome">Novo Nome:</label>
				<input class="form-control" type="text"  name="novoNome" value=""></input>
			</div>
			<div class="form-group">
				<label class="control-label" for="novosobrenome">Novo Sobrenome:</label>
				<input class="form-control" type="text"  name="novoSobrenome" value=""></input>
			</div>
			<button class="btn btn-default" type="submit" name="salvarNomes">Salvar</button>
		</form>
	</div>
	
	
</div> <!-- fecha div containerdo Cpanel.php -->


<?php include 'inc/rodape.php'; ?>