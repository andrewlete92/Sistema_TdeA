jQuery(document).ready(function() {loadAreas();});

function loadAreas(){
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
			$("#tabla").html('');
			if(data !=null){
				$.each(data, function(index,value){
					var fila = "<tr><td>" + value.area + "</td><td>" + 
					'<input type="button" id="' + value.idarea + '" class="btn btn-info" value="VER"/>'  + "</td></tr>";
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