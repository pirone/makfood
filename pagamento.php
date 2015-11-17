<!DOCTYPE html>
<html lang="en">

	<body id="bgpizza">
		<div class="container">
            <?php include("cabecalho.php"); ?>
			
						
		<div class="container" id="fundobranco">
		<table class="table table-striped">
		<div id="meusPedidos"><img src="img/pizza-b.png" width=20% height=auto; style="float:left; margin:0 20px 20px 0;"></img>
		
					<h3>Tamanho:</h3> <h4>Grande</h4> 
					<h3>Ingredientes:</h3> <h4>Presunto + Mussarela + Tomate</h4>
					 
		</div>
		</table>
		<div class="container">
		
			<form class="form-horizontal" role="form">
			<fieldset>
			<legend>Pagamento</legend>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="card-holder-name">Nome no cart�o</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Nome como escrito no cart�o">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="card-number">N�mero do cart�o</label>
				<div class="col-sm-9">
				<input type="text" class="form-control" name="card-number" id="card-number" placeholder="N�mero do cart�o">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="expiry-month">Data de vencimento</label>
				<div class="col-sm-9">
				<div class="row">
					<div class="col-xs-3">
					<select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
						<option>M�s</option>
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
					<select class="form-control" name="expiry-year">
						<option value="13">2013</option>
						<option value="14">2014</option>
						<option value="15">2015</option>
						<option value="16">2016</option>
						<option value="17">2017</option>
						<option value="18">2018</option>
						<option value="19">2019</option>
						<option value="20">2020</option>
						<option value="21">2021</option>
						<option value="22">2022</option>
						<option value="23">2023</option>
					</select>
					</div>
				</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="cvv">C�divo de verifica��o</label>
				<div class="col-sm-3">
				<input type="text" class="form-control" name="cvv" id="cvv" placeholder="C�digo de Seguran�a">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				<button type="button" class="btn btn-default">Cancelar</button>
				<button type="button" class="btn btn-success">Pagar agora</button>
				</div>
			</div>
			</fieldset>
			</form>
		</div>
	</body>
</html>