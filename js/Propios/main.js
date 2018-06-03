//Inicia verificación Login
jQuery(document).on('submit','#formlg',function(event){
	event.preventDefault();

	jQuery.ajax({
		url: '../controlador/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize()
	})
	.done(function(respuesta) {
		//console.log(respuesta);
		if (!respuesta.error) {
			if(respuesta.type=='Coordinador'){
			//$('#btnlg').val("INGRESAR");
			location.href='../vista/Views_Coordinador/Coordinador_Panel.php';
			} else if (respuesta.type=='Docente'){
			//$('#btnlg').val("INGRESAR");
			//location.href='';
			location.href='../vista/Views_Docentes/Docente_Panel.php';
			}
		}else {
			$('.error').slideDown('slow');
			setTimeout(function(){
				$('.error').slideUp('slow');
			},3000);
			//$('#btnlg').val("INGRESAR");
		}
	})
	.fail(function(resp) {
		console.log(resp);
	})
	.always(function(){
		console.log("Complete");
	});
});
//Finaliza verificación login