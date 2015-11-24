$(function() {
	
	window.pizza = new Pizza();
	$('[data-toggle="tooltip"]').tooltip();
	
	var sum = 0;
	function carregaTotal(){
		sum = 0;
		if ($('.price').length > 0){
		    $('.price').each(function() {
		        sum = sum + Number($(this).val());
		        $('#totalpizza').val(sum);
		    });
		    return sum;
		} else{
			sum = 0;
			$('#totalpizza').val('sum');
		}
	}
	var selecionarTamanhoAviso = $('#listaTamanho li:eq(0)');
	var selecionarIngredientesAviso = $('#listaIngredientes li:eq(0)');


	$('li:gt(0)', '#listaTamanho').click(function(e) {
		var preco = $(this).find('.badge').html();
		var precodouble = preco.split("R$ ").join("");
		var precodouble = precodouble.replace(",",".");
		var precofinal = parseFloat(precodouble).toFixed(2);
		
		e.preventDefault();
		
		selecionarTamanhoAviso.tooltip('hide');

		
		var el = $(this);
		
		$("#tampizza tbody tr").remove();
		$("#ingadd tbody tr").remove();
		

		pizza.selecionarTamanho(el.data('tam'));
		$('#tampizza tbody').append('<tr class="warning"><td>'+pizza.getTamanho()+'<input type="hidden" name="tampizza" value="'+
				pizza.getTamanho()+'" /></td><td>'+preco+'<input class="price" type="hidden" name="tampreco" value="'+precofinal+'" /></td>');
		/*$('#tampizza span').html(pizza.getTamanho());
		$('#tampizza input').val(pizza.getTamanho());*/
		
		el.addClass('active').siblings().removeClass('active');
		$('#massapizza').removeClass().addClass(pizza.classemassa);
	});

	$('li:gt(0)', '#listaIngredientes').click(function() {
		var ingred = $(this).find('span').html();
		var ingid = $(this).find('span[hidden=hidden]').html();
		var imagem = $(this).find('img').attr('src');
		
		var preco = $(this).find('.badge').html();
		var precodouble = preco.split("R$ ").join("");
		var precodouble = precodouble.replace(",",".");
		var precofinal = parseFloat(precodouble).toFixed(2);
		
		selecionarIngredientesAviso.tooltip('hide');
		
		if (pizza.getTamanho() == null) {
			selecionarTamanhoAviso.tooltip('show');
		} else {
			pizza.adicionarIng(ingred, function(ing) {
				$('#ingadd tbody').append('<tr><td>'+ingred+'<input type="hidden" name="ing[]" value="'+
						ingid+'" /></td><td><img src='+imagem+'><input type="hidden" name="imging[]" value="'+
						imagem+'" /></td><td>'+preco+'<input class="price" type="hidden" value="'+precofinal+'"></td><td><center><button id="removeing" type="button" class="btn btn-danger btn-md" aria-label="Center Align"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></td></center></td></tr>');
				carregaTotal();
			});
			
		}
		
		
	    
	}).on('mousedown', function () {
		$(this).addClass('active');
	}).on('mouseup', function () {
		$(this).removeClass('active');
	});
	
	$('#fecharPedidoBtn').click(function(e) {
		if (pizza.getTamanho() == null) {
			selecionarTamanhoAviso.tooltip('show');
			e.preventDefault();
		}
		
		if (pizza.getIngredientes().length == 0) {
			selecionarIngredientesAviso.tooltip('show');
			e.preventDefault();
		}	
	});
	
	$('#ingadd tbody').on('click', 'button', function(){
		var btnRow = $(this).parents('tr');
		var ing = btnRow.children('td:eq(0)').html();				
		pizza.removerIng(ing, function () {
			btnRow.remove();
			carregaTotal();
		});
		
		
	});	

	
});
