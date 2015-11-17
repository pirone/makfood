$(function() {
	
	window.pizza = new Pizza();

	$('a', '#listaTamanho').click(function(e) {
		e.preventDefault();
		$("#ingadd td").detach();
		$('[data-toggle="tooltip"]').tooltip('hide');
		$('#listaTamanho li').removeAttr('data-toggle data-original-title data-placement title');
		var el = $(this);		
		var tam = el.data('tam');

		pizza.selecionarTamanho(tam);
		el.parent().addClass('active').siblings().removeClass('active');
		$('#massapizza').removeClass().addClass(pizza.classemassa);
	});

	$('li', '#listaIngredientes').click(function() {
		var ingred = $(this).find('span').html();
		var imagem = $(this).find('img').attr('src');
		pizza.adicionarIng(ingred, function(ing) {
			console.log('lero');
			$('#ingadd tbody').append('<tr><td>'+ingred+'</td><td><img src='+imagem+'></td><td><center><button id="removeing" type="button" class="btn btn-danger btn-md" aria-label="Center Align"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></td></center></td></tr>');
		});			
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
