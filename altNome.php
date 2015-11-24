<?php //include 'lib/helpers/auth.php'; ?>
<?php include 'inc/auth.php'; ?>
<?php include 'cpanel.php'?>
<?php include 'lib/helpers/consultasSql.php'?>
<div class="col-md-9 fundobranco">
	<h2>Alterar Nome e Sobrenome</h2>
	<hr>
	<div class="form-group">
		<label class="control-label" for="nomeatual">Nome Cadastrado:</label>
		<input class="form-control" disabled="disabled" type="text"
			name="nomeatual" value="<?php carregaNome()?>"></input>
	</div>
	<div class="form-group">
		<label class="control-label" for="sobrenomeatual">Sobrenome
			Cadastrado:</label> <input class="form-control" disabled="disabled"
			type="text" name="sobrenomeatual" value="<?php carregaSobrenome()?>"></input>
	</div>
	<form action="lib/ctrl/alteraNome.php" method="post" id="formnome">
		<div class="form-group">
			<label class="control-label" for="novonome">Novo Nome:</label> <input
				class="form-control" type="text" id="novonome" name="novonome"
				value=""></input>
		</div>
		<div class="form-group">
			<label class="control-label" for="novosobrenome">Novo Sobrenome:</label>
			<input class="form-control" type="text" id="novosobrenome"
				name="novosobrenome" value=""></input>
		</div>
		<button class="btn btn-default" type="submit" name="salvarNomes">Salvar</button>
	</form>
</div>


</div>
<!-- fecha div containerdo Cpanel.php -->


<?php include 'inc/rodape.php'; ?>