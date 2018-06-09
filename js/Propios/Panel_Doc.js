var codAsignatura, asignatura, grupo, matriculados;

jQuery(document).ready(function() {
	loadAsignaturas();
	filtrar();
});

jQuery(document).on('click', '.report', function(){
	event.preventDefault();
	//mostrar();
	$("#txtCodAsignatura").val($(this).parents('tr').find('td').eq(0).text());
	$("#txtAsignatura").val($(this).parents('tr').find('td').eq(1).text());
	$("#txtGrupo").val($(this).parents('tr').find('td').eq(2).text());
	$("#txtMatriculados").val($(this).parents('tr').find('td').eq(3).text());
	$("#txtAprobados").val("");
	$("#txtReprobados").val("");
	$("#fileMufor").val("");
	$("#fileConcer").val("");
	codAsignatura = $(this).parents('tr').find('td').eq(0).text();
	asignatura = $(this).parents('tr').find('td').eq(1).text();
	grupo = $(this).parents('tr').find('td').eq(2).text();
	matriculados = $(this).parents('tr').find('td').eq(3).text();
});

jQuery(document).on('click', '#btnSave',function(){
	event.preventDefault();
	//$('#modal').modal('hide');
	aprobados = parseInt($("#txtAprobados").val());
	reprobados = parseInt($("#txtReprobados").val());
	if(aprobados+reprobados==matriculados){
		if ($("#fileMufor").val().length>0 && $("#fileConcer").val().length>0) {
			saveFiles();
			setTimeout(function(){
			saveGrupoInfo();
			//limpiar();
			},1000);
		} else {
			alert("Es necesario adjuntar archivos para continuar");
		}
	} else {
		alert("La cantidad de alumnos reprobados y aprobados no coincide con los matriculados, por favor revise.");
	}
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

function saveFiles(){
var idConcer;
var idMufor;
var inputFile = document.getElementById("fileMufor");
var file = inputFile.files[0];
var data = new FormData();
data.append('archivoMufor',file);
jQuery.ajax({
	url:'../../controlador/uploadfiles.php',
	type:'POST',
	dataType: 'json',
	data:data,
	contentType:false,
	processData:false,
	cache:false
	})
	.done(function(data){
		//console.log(data);
		if(!data.answ){
			console.log('Mufor guardado exitosamente');
			console.log(data);
			//idMufor = dato.idArchivo;
		}
	})
	.fail(function(error){
		console.log(error);
	});
//SE GUARDAR EL OTRO ARCHIVO
var inputFile2 = document.getElementById("fileConcer");
var file2 = inputFile2.files[0];
var data2 = new FormData();
data2.append('archivoConcer',file2);
jQuery.ajax({
	url:'../../controlador/uploadfiles.php',
	type:'POST',
	dataType: 'json',
	data:data2,
	contentType:false,
	processData:false,
	cache:false
	})
	.done(function(data){
		//console.log(data);
		if(!data.answ){
			console.log(data);
			console.log('Concertacion guardado exitosamente');
		}
	})
	.fail(function(error){
		console.log(error);
	});
}

function saveGrupoInfo(){
var aprobados = $("#txtAprobados").val();
var reprobados = $("#txtReprobados").val();
var file, file2;
if ($('#fileMufor').val()!="") {
	file = document.getElementById("fileMufor").files[0].name;
}
if ($('#fileConcer').val()!="") {
	file2 = document.getElementById("fileConcer").files[0].name;
}
jQuery.ajax({
	url: '../../controlador/grupoInfo.php',
	type: 'POST',
	dataType: 'json',
	data: "&action=" + 'insert' + "&Mufor=" + file + "&Concer=" + file2 +
	"&txtCodAsignatura=" + codAsignatura + "&txtAsignatura=" + asignatura +
	"&txtGrupo=" + grupo + "&txtMatriculados=" + matriculados +
	"&txtAprobados=" + aprobados + "&txtReprobados=" + reprobados,
	})
	.done(function(data){
		console.log("success");
		console.log(data);
		if(!data.answ){
			alert('Registro guardado satisfactoriamente.');
			$('#modal').modal('hide');
			//$('#formGrupo').reset();
		} else {
			alert('La información no se guardó');
		}
	})
	.fail(function(fail) {
		console.log(fail);
		//alert('Se presentó un problema y la información no se guardó.');
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

function mostrar(){
	$("#modal").load('../form_modal.html');
		setTimeout(function(){
		$(".modalpopup").modal();
		},500);
}

function limpiar(){
	document.getElementById("exampleModal").reset();
}