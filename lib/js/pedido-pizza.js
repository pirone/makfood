$(function() {
	
	window.pizza = new Pizza();
	$('[data-toggle="tooltip"]').tooltip();
	
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
		
		if (pizza.getTamanho() == null) {
			selecionarTamanhoAviso.tooltip('show');
		} else {
			pizza.adicionarIng(ingred, function(ing) {
				$('#ingadd tbody').append('<tr><td>'+ingred+'<input type="hidden" name="ing[]" value="'+ingred+'" /></td><td><img src='+imagem+'><input type="hidden" name="imging[]" value="'+imagem+'" /></td><td></td><td><center><button id="removeing" type="button" class="btn btn-danger btn-md" aria-label="Center Align"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></td></center></td></tr>');
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
		});
	});	

	
});
