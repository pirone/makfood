<!DOCTYPE html>
<html lang="en">

<body id="bgpizza">
	<div class="container">
            <?php include("cabecalho.php"); ?>
			
						
		<center>
			<img src="img/pizza_banner.jpg" width=100% height=auto;></img>
		</center>
		<div class="panel panel-warning">

			<div class="panel-heading">Pedir PIZZA!</div>
			<div class="panel-body">
				<button type="button" class="btn btn-warning" id="btmassa">Massa</button>
				<button type="button" class="btn btn-default" id="bting1"
					onclick="windowIngred1();">Ingrediente 1</button>

				<button type="button" title="Adicionar Ingrediente" id="addIngred"
					class="btn btn-primary" aria-label="Left Align"
					onclick="createInput();">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>

				<button type="button" title="Adicionar Ingrediente" id="tiraIngred"
					class="btn btn-danger" aria-label="Left Align"
					onclick="deleteIngred();" disabled>
					<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
				</button>

			</div>
		</div>
		<div id="lista">
			<ul class="list-group" id="listaIngred1">
				<button class="list-group-item disabled">
					Selecione o Ingrediente 1</a>
					<button onclick="selecIngred(this);" class="list-group-item">
						Tomate</a>
						<button onclick="selecIngred(this);" class="list-group-item">
							Presunto</a>
							<button onclick="selecIngred(this);" class="list-group-item">
								Mussarela</a>
								<button onclick="selecIngred(this);" class="list-group-item">
									Frango</a>
			
			</ul>
		</div>

		<ul class="list-group" id="listaIngred2" hidden>
			<button onclick="" class="list-group-item disabled">
				Selecione o Ingrediente 2</a>
				<button onclick="selecIngred(this);" class="list-group-item">
					Tomate</a>
					<button onclick="selecIngred(this);" class="list-group-item">
						Presunto</a>
						<button onclick="selecIngred(this);" class="list-group-item">
							Mussarela</a>
							<button onclick="selecIngred(this);" class="list-group-item">
								Frango</a>
								<!--<br><button onclick="removeIngred();" class="btn btn-danger" >Remover Ingrediente</button> -->
		
		</ul>

		<ul class="list-group" id="listaIngred3" hidden>
			<button class="list-group-item disabled">
				Selecione o Ingrediente 3</a>
				<button onclick="selecIngred(this);" class="list-group-item">
					Tomate</a>
					<button onclick="selecIngred(this);" class="list-group-item">
						Presunto</a>
						<button onclick="selecIngred(this);" class="list-group-item">
							Mussarela</a>
							<button onclick="selecIngred(this);" class="list-group-item">
								Frango</a>
		
		</ul>

		<ul class="list-group" id="listaIngred4" hidden>
			<button class="list-group-item disabled">
				Selecione o Ingrediente 4</a>
				<button onclick="selecIngred(this);" class="list-group-item">
					Tomate</a>
					<button onclick="selecIngred(this);" class="list-group-item">
						Presunto</a>
						<button onclick="selecIngred(this);" class="list-group-item">
							Mussarela</a>
							<button onclick="selecIngred(this);" class="list-group-item">
								Frango</a>
		
		</ul>

		<ul class="list-group" id="listaIngred5" hidden>
			<button class="list-group-item disabled">
				Selecione o Ingrediente 5</a>
				<button onclick="selecIngred(this);" class="list-group-item">
					Tomate</a>
					<button onclick="selecIngred(this);" class="list-group-item">
						Presunto</a>
						<button onclick="selecIngred(this);" class="list-group-item">
							Mussarela</a>
							<button onclick="selecIngred(this);" class="list-group-item">
								Frango</a>
		
		</ul>



		<button type="button" class="btn btn-primary btn-lg pull-right">
			<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			Fechar pedido
		</button>




	</div>

</body>

<script>
					//var bting = 1;
					var bting = $("[id^=bting]").length;
					var valantigo;
						function createInput(){
							bting++;
							var $input = $('<input type="button" class="btn btn-default" value="Ingrediente '+bting+'" id="bting'+bting+'" onclick="windowIngred'+bting+'(this);" />')
							
							$input.insertBefore($("#addIngred"));
							
							if (bting > 4){
								$("#addIngred").attr("disabled", "disabled");
							} if (bting > 1){
								$("#tiraIngred").removeAttr("disabled", "disabled");
							}
						}
						
						function deleteIngred(){
							$("#listaIngred"+bting).hide('slow');
							$("#bting"+bting).remove();
							$('#listaIngred'+bting+' a').removeClass('active');
							bting--;
							
							if (bting < 2){
							 $("#tiraIngred").attr("disabled", "disabled");
							} if (bting < 5){
								$("#addIngred").removeAttr("disabled", "disabled");
							  }
						}
						
						function selecIngred(obj){
							
							var selecionado = $(obj).text();
							if($(obj).parent().is("#listaIngred1")){
								if($("#listaIngred1 button").hasClass('active')){
									$("#listaIngred1 button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#bting1").text(selecionado);
									$("#bting1").addClass('btn-primary');
								
							}
							if($(obj).parent().is("#listaIngred2")){
								if($("#listaIngred2 button").hasClass('active')){
									$("#listaIngred2 button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#bting2").val(selecionado);
									$("#bting2").addClass('btn-primary');
								
							}
							if($(obj).parent().is("#listaIngred3")){
								if($("#listaIngred3 button").hasClass('active')){
									$("#listaIngred3 button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#bting3").val(selecionado);
									$("#bting3").addClass('btn-primary');
								
							}
							if($(obj).parent().is("#listaIngred4")){
								if($("#listaIngred4 button").hasClass('active')){
									$("#listaIngred4 button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#bting4").val(selecionado);
									$("#bting4").addClass('btn-primary');
								
							}
							if($(obj).parent().is("#listaIngred5")){
								if($("#listaIngred5 button").hasClass('active')){
									$("#listaIngred5 button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#bting5").val(selecionado);
									$("#bting5").addClass('btn-primary');
								
							}
/*							if ($(obj).hasClass("active")){
								
								$(obj).removeClass('active');
								$("#bting2").val(valantigo);
							}else*/
									

									
							
						}
						
						function removeIngred(){
						
							if ($("#listaIngred2").not("hidden")){
								$("#listaIngred2 a").removeClass('active');
								$("#listaIngred2").hide('slow');
								$("#bting2").remove();
								bting--;
							}
						
						}
						
						function tabelaIngred(obj){
							
							
							
						}
						
						function windowIngred1(obj){
						valantigo = $(obj).val();
							$('#listaIngred2').hide('fast');
							$('#listaIngred3').hide('fast');
							$('#listaIngred4').hide('fast');
							$('#listaIngred5').hide('fast');
							if ($('#listaIngred1').is(":hidden")){
								$('#listaIngred1').show('slow');
								} else {
									$('#listaIngred1').hide('slow');
								}
							//$('#listaIngred1').removeAttr("hidden","hidden");
							
						}
						
						function windowIngred2(obj){
						valantigo = $(obj).val();
							$('#listaIngred1').hide('fast');
							$('#listaIngred3').hide('fast');
							$('#listaIngred4').hide('fast');
							$('#listaIngred5').hide('fast');
							if ($('#listaIngred2').is(":hidden")){
								$('#listaIngred2').show('slow');
							} else {
								$('#listaIngred2').hide('slow');
								}
						}
								
						function windowIngred3(obj){
						valantigo = $(obj).val();
							$('#listaIngred1').hide('fast');
							$('#listaIngred2').hide('fast');
							$('#listaIngred4').hide('fast');
							$('#listaIngred5').hide('fast');
							if ($('#listaIngred3').is(":hidden")){
								$('#listaIngred3').show('slow');
							} else {
								$('#listaIngred3').hide('slow');
							}
						}
						
						function windowIngred4(obj){
						valantigo = $(obj).val();
							$('#listaIngred1').hide('fast');
							$('#listaIngred2').hide('fast');
							$('#listaIngred3').hide('fast');
							$('#listaIngred5').hide('fast');
							if ($('#listaIngred4').is(":hidden")){
								$('#listaIngred4').show('slow');
							} else {
								$('#listaIngred4').hide('slow');
							}
						}
						
						function windowIngred5(obj){
						valantigo = $(obj).val();
							$('#listaIngred1').hide('fast');
							$('#listaIngred2').hide('fast');
							$('#listaIngred3').hide('fast');
							$('#listaIngred4').hide('fast');
							if ($('#listaIngred5').is(":hidden")){
								$('#listaIngred5').show('slow');
							} else {
								$('#listaIngred5').hide('slow');
							}
						}


						</script>
</html>