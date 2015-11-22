$(function() {
	
	window.pizza = new Pizza();
	$('[data-toggle="tooltip"]').tooltip();
	
	var sum = 0;
	function carregaTotal(){
		sum = 0;
	    $('.price').each(function() {
	        sum = sum + Number($(this).val());
	        $('#totalpizza').val(sum);
	    });
	    return sum;
	}
	var selecionarTamanhoAviso = $('#listaTamanho li:eq(0)');


	$('a', '#listaTamanho').click(function(e) {
		e.preventDefault();
		
		selecionarTamanhoAviso.tooltip('hide');
		
		var el = $(this);
		
		$("#ingadd tbody tr").remove();

		pizza.selecionarTamanho(el.data('tam'));		
		$('#tampizza span').html(pizza.getTamanho());
		$('#tampizza input').val(pizza.getTamanho());
		
		el.parent().addClass('active').siblings().removeClass('active');
		$('#massapizza').removeClass().addClass(pizza.classemassa);
	});

	$('li', '#listaIngredientes').click(function() {
		var ingred = $(this).find('span').html();
		var imagem = $(this).find('img').attr('src');
		var preco = $(this).find('.badge').html();
		var precodouble = preco.split("R$ ").join("");
		var precodouble = precodouble.replace(",",".");
		parseFloat(precodouble);
		
		
		if (pizza.getTamanho() == null) {
			selecionarTamanhoAviso.tooltip('show');
		} else {
			pizza.adicionarIng(ingred, function(ing) {
				$('#ingadd tbody').append('<tr><td>'+ingred+'<input type="hidden" name="ing[]" value="'+
						ingred+'" /></td><td><img src='+imagem+'><input type="hidden" name="imging[]" value="'+
						imagem+'" /></td><td>'+preco+'<input class="price" type="hidden" value="'+precodouble+'"></td><td><center><button id="removeing" type="button" class="btn btn-danger btn-md" aria-label="Center Align"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></td></center></td></tr>');
				carregaTotal();
			});
			
		}
		
		
	    
	}).on('mousedown', function () {
		$(this).addClass('active');
	}).on('mouseup', function () {
		$(this).removeClass('active');
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
