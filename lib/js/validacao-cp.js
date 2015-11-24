			$('#formnome').validate(
					{
						rules : {
							novonome : {
								minlength : 2,
								maxlength : 40,
								required : true
							},
							novosobrenome : {
								minlength : 2,
								maxlength : 40,
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
			$("#formnome").removeAttr("novalidate");
			
			$('#formendereco').validate(
					{
						rules : {
							novoendereco : {
								minlength : 6,
								maxlength : 80,
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
