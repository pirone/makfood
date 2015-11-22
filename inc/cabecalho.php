<?php
if(!isset($_SESSION)){
	session_start();
}
include_once 'lib/helpers/auth.php';
?>
<!DOCTYPE html>
<html lang="en" class="<?php echo isLogado() ? 'logado' : ''; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MakFood</title>
<link href="lib/css/bootstrap.min.css" rel="stylesheet">
<link href="lib/css/custom.css" rel="stylesheet">
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="lib/js/login-modal.js"></script>
<?php if(function_exists('header_assets')) { header_assets(); } ?>
</head>
<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a href="index.php"><img class="navbar-brand" alt="" src="lib/img/logosemfundo2.png" style="width:120px; height:70px; margin-top: -10px; margin-bottom: -5px;"></img></a>
					</div>

					<div class="collapse navbar-collapse"
						id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Monte seu pedido! <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="pedido-pizza.php">Pizza</a></li>
									<!-- <li><a href="sanduiche.php">Sanduíche</a></li>-->
								</ul> <!--<li><a href="#">Lojas</a></li> -->
							<?php if(isLogado()) { ?>
							<li><a href="meusPedidos.php">Meus pedidos</a></li>
							<?php } ?>

						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li id="menuRegistro">
								<a href="#" data-toggle="modal" data-target="#modal-register">Registre-se</a>
							</li>
							<li id="menuLogin">
								<a href="#" data-toggle="modal" data-target='#login-modal' id="navLogin">Login</a>
							</li>
							<li class="dropdown" id="menuBemvindo">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bem vindo! <?php get_username(); ?>
								<span class="caret" data-toggle="dropdown"></span></a>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									 	<li><a href="cpanel.php">Painel de Controle</a></li>
									    <li><a href="lib/ctrl/logout.php">Logout</a></li>
									  </ul>
								 </li>
							
						</ul>
					</div>
					
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>



			<!-- MODAL REGISTRO-->
			<div class="modal fade" id="modal-register" tabindex="-1"
				role="dialog" aria-labelledby="modal-register-label"
				aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h3 class="modal-title" id="modal-register-label">Cadastre-se</h3>
							<p>Informe seus dados para realização de cadastro</p>
						</div>

						<div class="modal-body">

							<form role="form" action="" method="post"
								class="registration-form" id="formcadastro">

								<div class="form-group has-feedback">
									<label class="sr-only control-label" for="login">Email</label>
									<input type="text" name="login" placeholder="Email..."
										class="form-control" id="login"
										aria-describedby="inputSuccess2Status" required> <span
										class="glyphicon form-control-feedback" id="msgemail"></span>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="senha">Senha</label> <input
										type="password" name="senha"
										placeholder="Senha (6-8 caracteres)"
										class="form-first-name form-control" id="senha"> <span
										class="glyphicon form-control-feedback" id="msgsenha"></span>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="confsenha">Confirma sua Senha</label>
									<input type="password" name="confsenha"
										placeholder="Confirme a Senha"
										class="form-first-name form-control" id="confsenha"> <span
										class="glyphicon form-control-feedback" id="msgsenha"></span>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only control-label" for="nome">Informe seu
										Nome</label> <input type="text" name="nome"
										class="form-control" id="nome"
										aria-describedby="inputSuccess2Status" placeholder="Nome...">
									<span class="glyphicon form-control-feedback" id="nome1"></span>
									<span id="inputSuccess2Status" class="sr-only">(success)</span>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="form-last-name">Sobrenome</label> <input
										type="text" name="sobrenome" placeholder="Sobrenome..."
										class="form-last-name form-control" id="sobrenome"> <span
										class="glyphicon form-control-feedback" id="msgsobrenome"></span>
								</div>


								<div class="form-group has-feedback">
									<label class="sr-only" for="endereco">Endereço completo</label>
									<input name="endereco" placeholder="Endereço completo"
										class="form-about-yourself form-control" id="endereco"></input>
								</div>
								<div class="form-group has-feedback">
									<label class="sr-only" for="telefone">Telefone</label> 
									<input type="text" name="telefone" placeholder="Telefone" class="form-email form-control" id="idtelefone"></input>
								</div>
								<button type="submit" name="cadastrar" class="btn btn-info">Cadastrar</button>
							</form>

						</div>

					</div>
				</div>
				<!-- FIM MODAL REGISTRO -->


			</div>
			<?php if(!isLogado()) { ?>
			<!-- INICIO MODAL LOGIN -->
			<div class="modal fade" id="login-modal" role="dialog"
				aria-labelledby="myModalLabel" aria-hidden="true"
				style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" align="center">
							<img class="" id="img_logo"
								src="lib/img/logofundo.png">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
						</div>

						<!-- Begin # DIV Form -->
						<div id="div-forms">

							<!-- Begin # Login Form -->
							<form id="formlogin" action="lib/ctrl/login.php" method="post">
								<div class="modal-body">
									<div id="div-login-msg">
										<div id="icon-login-msg"
											class="glyphicon glyphicon-chevron-right"></div>
										<span id="text-login-msg">Digite seu usuário e senha.</span>
									</div>
									<div class="form-group">
										<input id="login_email" class="form-control" type="text" placeholder="Email" name="username" required>
									</div> 
									<div class="form-group">
										<input id="login_senha" class="form-control" type="password" name="password" placeholder="Senha" required>
									</div>
									<div class="checkbox">
										<label> <input type="checkbox"> Lembrar-me
										</label>
									</div>
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
									</div>
									<div>
										<button id="login_lost_btn" type="button" class="btn btn-link">Esqueceu
											sua Senha?</button>
									</div>
								</div>
							</form>
							<!-- End # Login Form -->

							<!-- Begin | Lost Password Form -->
							<form id="lost-form" style="display: none;">
								<div class="modal-body">
									<div id="div-lost-msg">
										<div id="icon-lost-msg"
											class="glyphicon glyphicon-chevron-right"></div>
										<span id="text-lost-msg">Type your e-mail.</span>
									</div>
									<input id="lost_email" class="form-control" type="text"
										placeholder="E-Mail (type ERROR for error effect)" required>
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
									</div>
									<div>
										<button id="lost_login_btn" type="button" class="btn btn-link">Log
											In</button>
										<button id="lost_register_btn" type="button"
											class="btn btn-link">Register</button>
									</div>
								</div>
							</form>
							<!-- End | Lost Password Form -->


						</div>
						<!-- End # DIV Form -->

					</div>
				</div>
			</div>
			<!--  FIM MODAL LOGIN -->
			<?php } ?>
		</div>