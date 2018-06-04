jQuery(document).ready(function() {loadAsignaturas();});

jQuery(document).on('click', '.report', function(){
	event.preventDefault();
	alert("prueba");
});

function loadAsignaturas(){
	jQuery.ajax({
	url: '../../controlador/Panel_doc.php',
	type: 'POST',
	dataType: 'json',
	data: $(this).serialize() + "&action=" + 'load',
	})
	.done(function(data) {
		//console.log("success");
		console.log(data);
		if(!data.error){
			$("#tabla").html('');
			if(data !=null){
				$.each(data, function(index,value){
					var fila = "<tr><td>" + value.codigo + "</td><td>" + 
					value.nombreAsignatura + "</td><td>" + 
					value.grupo + "</td><td>" + 
					value.Matriculados + "</td><td>" + 
					'<input type="button" id="' + value.grupo + 
					'" class="btn btn-info report" value="REPORTAR"/>'  + "</td></tr>";
					$("#tabla").append(fila);
				});
			}
		}
	})
	.fail(function(error) {
		console.log(error);
	})
	.always(function() {
		console.log("complete");
	});
}