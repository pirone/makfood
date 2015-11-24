<?php //include 'lib/helpers/auth.php'; ?>
<?php include 'inc/cabecalho.php'; ?>
<?php include 'inc/auth.php'; ?>

<div class="container">
	<h1 class="fundobranco">Bem vindo <?php get_username()?>!</h1>
	<hr>
	<div class="col-md-3" id="menucp">
		<ul class="nav nav-pills nav-stacked fundomenu">
		  <li role="presentation"><a href="altEndereco.php">Alterar Endereço</a></li>
		  <li role="presentation"><a href="altNome.php">Alterar Nome</a></li>
		  <li role="presentation"><a href="#">Alterar Senha</a></li>
		</ul>
	</div>
