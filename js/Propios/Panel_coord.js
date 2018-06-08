jQuery(document).ready(function() {cargarSelect();});


jQuery(document).on('click', '#ver',function(){
	var area = $('#SelectArea').val();
	findArea(area);
})

function cargarSelect(){
jQuery.ajax({
	url: '../../controlador/Panel_coord.php',
	type: 'POST',
	dataType: 'json',
	data: $(this).serialize() + "&action=" + 'load',
	})
	.done(function(data) {
		//console.log("success");
		console.log(data);
		if(!data.error){
			if(data !=null){
				$.each(data, function(index,value){
					var option = '<option value="' + value.idArea + '">' + value.area + '</option>';
					$("#SelectArea").append(option);
				});
			}
		}
	})
	.fail(function(error){
		console.log(error);
	});
}

function findArea(id){
	jQuery.ajax({
		url: '../../controlador/Panel_coord.php',
		type: 'POST',
		dataType: 'json',
		data: "&action=" + 'find' + "&id=" + id,
	})
	.done(function(data) {
		//console.log("success");
		console.log(data);
		if(!data.error){
			$("#tabla").html('');
			if(data !=null){
				$.each(data, function(index,value){
					var fila = "<tr><td>" + value.grupo + "</td><td>" + 
					value.asignatura + "</td><td>" + 
					value.Matriculados + "</td><td>" + 
					value.Aprobados + "</td><td>" + 
					value.Reprobados + "</td><td>" + 
					'<a href="../../archivos/MUFOR/' + value.Mufor + '" target="_blank">VER</a>' + "</td><td>" + 
					'<a href="../../archivos/CONCERTACION/' + value.Concertacion + '" target="_blank">VER</a>' + "</td></tr>";
					//value.Concertacion + "</td></tr>"; 
					/*'<input type="button" id="' + value.grupo + 
					'" class="btn btn-info report" data-toggle="modal" data-target="#exampleModal" value="REPORTAR"/>'  + "</td></tr>";*/
					$("#tabla").append(fila);
				});
			} 
		} else {
			alert("Prueba");
		}
	});
}