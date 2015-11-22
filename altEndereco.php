<?php //include 'lib/helpers/auth.php'; ?>
<?php include 'inc/auth.php'; ?>
<?php include 'cpanel.php'?>
<?php include 'lib/helpers/consultasSql.php';?>

	<div class="col-md-9 fundobranco">
		<h2>Alterar Endereço</h2>
		<hr>
		<div class="form-group">
			<label class="control-label" for="enderecoatual">Endereço Cadastrado:</label>
			<input class="form-control" disabled="disabled" type="text" name="enderecoatual" value="<?php carregaEndereco()?>"></input>
		</div>
		<form action="lib/ctrl/alteraEndereco.php" method="post">
		<div class="form-group">
			<label class="control-label" for="novoendereco">Novo Endereço:</label>
			<input class="form-control" type="text"  name="novoEndereco" value=""></input>
		</div>
		<button class="btn btn-default" type="submit" name="salvarEndereco">Salvar</button>
		</form>
	</div>
	
	
</div> <!-- fecha div containerdo Cpanel.php -->


<?php include 'inc/rodape.php'; ?>