$(document).ready(
		function() {
			$('#login-modal').on('hidden.bs.modal', function () {
				$('#formlogin')[0].reset();
				$('#formlogin').validate().resetForm();
			});
			
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
									if($('#logininvalido').length==0){
										$('div .modal-footer').after('<div class="alert alert-danger" id="logininvalido"><i class="glyphicon glyphicon-remove"></i> Usu&aacuterio e/ou senha inv&aacutelidos.</div>')
									}// Mensagem de erro
									
								}
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