$(document).ready(
		function() {

			jQuery.validator.addMethod("telefone", function(value, element) {
				return this.optional(element)
						|| /^\(\d\d\)\d{4,5}\-\d{4}/.test(value);
			}, "Digite um número válido!");

			$('#idtelefone').inputmask('(99)9999[9]-9999');
			
			$('#modal-register').on('hidden.bs.modal', function () {
				$('#formcadastro')[0].reset();
				$('#formcadastro').validate().resetForm();
			});

			$('#formcadastro').validate(
					{
						rules : {
							nome : {
								minlength : 2,
								maxlength : 40,
								required : true
							},
							sobrenome : {
								minlength : 2,
								maxlength : 40,
								required : true
							},
							login : {
								required : true,
								email : true
							},
							senha : {
								required : true,
								minlength : 6,
								maxlength : 8
							},
							confsenha : {
								required : true,
								minlength : 6,
								maxlength : 8,
								equalTo : "#senha",
							},
							endereco : {
								minlength : 2,
								maxlength : 80,
								required : true
							},
							telefone : {
								required : true,
								telefone : true
							},
						},
						submitHandler : function(form) {
							var form = $(form);
							$.post('lib/ctrl/cadastro.php', form.serialize(), function(
									response) {
								form.hide().after(response);
								form[0].reset();
								setTimeout(function() {
									form.show().next('.alert').remove();
								}, 5000);
							});
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

		});