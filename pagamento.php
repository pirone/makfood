<?php
session_start ();
include 'lib/helpers/auth.php';
include 'lib/helpers/consultasSql.php';
if (isset ( $_GET ['idpedido'] )) {
	include_once 'lib/helpers/db.php';
	
	$DB = new DB ( 'localhost', 'root', '', 'makfood' );
	
	$pedido = $DB->query ( '
			SELECT usuario, tampizza FROM pedidos WHERE id = :pedido', array (
			':pedido' => $_GET ['idpedido'] 
	) )->fetch ();
	
	// Logica de verificar o pedido no banco, se tem o mesmo ID de usuário do usuário logado e montá-lo (o pedido).
}
?>		
<?php include("inc/cabecalho.php"); ?>

<div class="container fundobranco">
		<?php if ($pedido['usuario'] == $_SESSION['idusuario']){?>
			<div class="row">
		<div class="col-md-12">
			<div class="col-md-3" id="fotopedido">
				<img src="lib/img/pizza-b.png"></img>
			</div>
			<div class="col-md-9" id="dadosPedido">
				<h3>Tamanho:</h3>
				<span><?php echo $pedido['tampizza']; ?></span>
				<h3>Ingredientes:</h3>
					<?php
			$ingredientes = $DB->query ( '
									SELECT ingrediente, nome FROM pedidoingnome WHERE pedido = :pedido', array (
					':pedido' => $_GET ['idpedido'] 
			) )->fetchAll ();
			
			foreach ( $ingredientes as $ing ) {
				echo '<img src="lib/img/' . $ing ['ingrediente'] . '.png" title="' . $ing ['nome'] . '">';
			}
			?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal"
				action="lib/ctrl/realizaPagamento.php?idpedido=<?php $_GET ['idpedido'];?>"
				method="post" role="form" id="formpgto">
				<fieldset>
					<legend>Pagamento</legend>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="enderecoEntrega">Endereço
							de Entrega</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="endentrega"
								id="endentrega" value="<?php carregaEndereco()?>"></input>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="total">R$</label>
						<div class="col-sm-1">
							<input type="text" class="form-control" name="total"
								readonly="readonly" value="<?php carregapreco()?>"></input>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="nomecartao">Nome no
							cartão</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" maxlength="40"
								name="nomecartao" id="nomecartao"
								placeholder="Nome como escrito no cartão">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="numcartao">Número do
							cartão</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="numcartao"
								id="numcartao" placeholder="Número do cartão">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="datavencimento">Data de
							vencimento</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-xs-3">
									<select class="form-control col-sm-2" name="mesvenc"
										id="mesvenc">
										<option value="">Mês</option>
										<option value="01">Jan (01)</option>
										<option value="02">Fev (02)</option>
										<option value="03">Mar (03)</option>
										<option value="04">Abr (04)</option>
										<option value="05">Mai (05)</option>
										<option value="06">Jun (06)</option>
										<option value="07">Jul (07)</option>
										<option value="08">Ago (08)</option>
										<option value="09">Set (09)</option>
										<option value="10">Out (10)</option>
										<option value="11">Nov (11)</option>
										<option value="12">Dez (12)</option>
									</select>
								</div>
								<div class="col-xs-3">
									<select class="form-control" name="anovenc" id="anovenc">
										<option value="15">2015</option>
										<option value="16">2016</option>
										<option value="17">2017</option>
										<option value="18">2018</option>
										<option value="19">2019</option>
										<option value="20">2020</option>
										<option value="21">2021</option>
										<option value="22">2022</option>
										<option value="23">2023</option>
										<option value="24">2024</option>
										<option value="25">2025</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label" for="cvv">Códivo de
							verificação</label>
						<div class="col-sm-3">
							<input type="text" class="form-control" name="cvv" id="cvv"
								placeholder="Código de Segurança">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<a href="pedido-pizza.php" type="button" class="btn btn-default">Cancelar</a>
							<button type="submit" class="btn btn-success">Pagar agora</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
		<?php
		} else {
			echo 'Você não pediu esta pizza!';
		}
		?>
	</div>
<?php include("inc/rodape.php"); ?>