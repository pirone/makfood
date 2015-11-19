function Pizza() {
	var p = this;
	var limiteIng = 3;
	var tamanhosPizza = {
		"p": "Pequena",
		"m": "Média",
		"g": "Grande"
	};

	p.qtdIngredientes = 0;
	p.ingredientes = [];
	p.classemassa = "";
	p.tamanho = null;

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
		
		p.tamanho = tamanhosPizza[tamanho];
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
		} else {
			console.log("Máximo da pizza.");
		}
	}

	p.removerIng = function(ing, callback) {
		// Só remove se tiver pelo menos 1 ing.
		if (p.ingredientes.length > 0) {
			p.ingredientes.splice(findIngPos(ing), 1);
			callback(ing);
		}
	}
	
	p.getTamanho = function() {
		return p.tamanho;
	}
	
	p.getIngredientes = function() {
		return p.ingredientes;
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