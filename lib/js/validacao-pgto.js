$(document).ready(
		function() {
			$('#cvv').inputmask('999[9]');
		});

				$('#formpgto').validate(
					{
						rules : {
							mesvenc : {
								required : true
							},
							endentrega : {
								required : true
							},
							nomecartao : {
								required : true
							},
							numcartao : {
								required : true,
								creditcard : true
							},
							cvv : {
								required : true
								
							}
						},
						
						highlight : function(element) {
							$(element).closest('.form-group').removeClass(
									'has-success').addClass('has-error');
						},
						success : function(element) {
							element.text('OK!').addClass('valid').closest('.form-group')
									.removeClass('has-error has-feedback')
									.addClass('has-success has-feedback');
						}
					});