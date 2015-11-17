$(document).ready(
		function() {
			$('#formlogin').validate(
					{
						rules : {
							username : {
								required : true,
								email : true
							},
							password : {
								required : true,
								minlength : 6,
								maxlength : 8
							}
						},
						submitHandler : function(form) {
							var form = $(form);
							$.post('lib/ctrl/login.php', form.serialize(), function(response) {
								if (response == "1") {
									window.location.reload();
								} else {
									$('div .modal-footer').after('<div class="alert alert-danger"><i class="glyphicon glyphicon-remove"></i> Erro, véi, tenta de novo!</div>')
									// Mensagem de erro
									alert(response);
								}
							});
						},
						highlight : function(element) {
							$(element).closest('.form-group').removeClass(
									'has-success').addClass('has-error');
						},
						success : function(element) {
							element.addClass('valid').closest('.form-group')
									.removeClass('has-error has-feedback')
									.addClass('has-success has-feedback');
						}
					});

		});