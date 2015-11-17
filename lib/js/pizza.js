function Pizza() {
	var p = this;
	var limiteIng = 3;

	p.qtdIngredientes = 0;
	p.ingredientes = [];
	p.classemassa ="";

	p.selecionarTamanho = function(tamanho) {
		// Reseta a pizza
		p.ingredientes = [];

		// Seleciona tamanho
		if (tamanho == "p") {
			p.qtdIngredientes = 2;
			p.classemassa = "pizzapequena";
		} else if (tamanho == "m") {
			p.qtdIngredientes = 3;
			p.classemassa = "pizzamedia";
		} else if (tamanho == "g") {
			p.qtdIngredientes = 5;
			p.classemassa = "pizzagrande";
		}
	}

	p.adicionarIng = function(ing, callback) {

		// Só adiciona se estiver dentro do limite
		if (p.ingredientes.length < p.qtdIngredientes) {
			if (contarQtdIng(ing) < limiteIng) {
				p.ingredientes.push(ing);
				callback(ing);
			} else {
				console.log("Máximo de ingrediente.");
			}
		} if (!(p.ingredientes.length < p.qtdIngredientes)) {
			console.log("Máximo da pizza.");
		} if (p.qtdIngredientes == 0){
			$('#listaTamanho [data-placement="bottom"]').attr("data-toggle","tooltip");
			$('#listaIngredientes').on('click', 'li', function() {
				$('[data-toggle="tooltip"]').tooltip('show');

			});
			//alert("Selecione o Tamanho da Pizza!");
		} if (p.qtdIngredientes > 0){
			
		}
	}

	p.removerIng = function(ing, callback) {
		// Só remove se tiver pelo menos 1 ing.
		if (p.ingredientes.length > 0) {
			p.ingredientes.splice(findIngPos(ing), 1);
			callback(ing);
		}
	}

	function contarQtdIng(ing) {
		var count = 0;
		for (var i = 0; i < p.ingredientes.length; i++) {
			if (p.ingredientes[i] == ing) {
				count++;
			}
		}
		return count;
	}
	
	function findIngPos(ing) {
		for (var i = 0; i < p.ingredientes.length; i++) {
			if (p.ingredientes[i] == ing) {
				return i;
			}
		}
		return -1;
	}
}