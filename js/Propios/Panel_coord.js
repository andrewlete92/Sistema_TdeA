jQuery(document).ready(function() {
	cargarSelect();
	filtrar();
});


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
					value.Asignatura + "</td><td>" + 
					value.Matriculados + "</td><td>" + 
					value.Aprobados + "</td><td>" + 
					value.Reprobados + "</td><td>" + 
					'<a href="../../archivos/MUFOR/' + value.Mufor + '" target="_blank">VER</a>' + "</td><td>" + 
					'<a href="../../archivos/CONCERTACION/' + value.Concertacion + '" target="_blank">VER</a>' + "</td></tr>";
					$("#tabla").append(fila);
				});
			} 
		} else {
			alert("No se encontraron grupos creados para su área");
		}
	});
}

function filtrar(){
	(function ($) {
        $('#buscar').keyup(function () {
          var rex = new RegExp($(this).val(), 'i');
          $('.search tr').hide();
          $('.search tr').filter(function () {
          return rex.test($(this).text());
          }).show();
        })
    }(jQuery));
}