jQuery(document).ready(function() {loadAsignaturas();});

jQuery(document).on('click', '.report', function(){
	event.preventDefault();
	//mostrar();
	$("#txtCodAsignatura").val($(this).parents('tr').find('td').eq(0).text());
	$("#txtAsignatura").val($(this).parents('tr').find('td').eq(1).text());
	$("#txtGrupo").val($(this).parents('tr').find('td').eq(2).text());
	$("#txtMatriculados").val($(this).parents('tr').find('td').eq(3).text());
	$("#txtAprobados").val("");
	$("#txtReprobados").val("");
});

jQuery(document).on('click', '#btnSave', function(){
	event.preventDefault();
	alert("Prueba guardar");
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
					'" class="btn btn-info report" data-toggle="modal" data-target="#exampleModal" value="REPORTAR"/>'  + "</td></tr>";
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
	$("#modal").load('../form_modal.html');
}

function saveGrupoInfo(){

}

function mostrar(){
	$("#modal").load('../form_modal.html');
		setTimeout(function(){
		$(".modalpopup").modal();
		},500);
}