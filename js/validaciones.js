'use strict'

$( function() {

    $("#txtDocumento").keydown(function(event) {
    	if(event.shiftKey){
			event.preventDefault();
		}
		if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 13 || event.keyCode == 9 ){
		}
		else {
			if (event.keyCode < 95) {
				if (event.keyCode < 48 || event.keyCode > 57) {
					event.preventDefault();
					mensaje("Atención!!", "Solo se permiten numeros",300,200);
				}
			} 
			else {
				if (event.keyCode < 96 || event.keyCode > 105) {
					event.preventDefault();
					mensaje("Atención!!", "Solo se permiten numeros",300,200);
				}
			}
		}
	});

	$("#preRegistro").submit(function(e){
		e.preventDefault();
		if(!comprobarClave()){
			limpiarcontrasena();
			return false; 
		}
		$.ajax({
			type:"post",
			url:"controlador/registro.php",
			data:$("#preRegistro").serialize(),
			success:function(resultado){
				mensaje("Atencion!!",resultado,900,500);
                setTimeout("window.location.replace('./ingreso.php')",3000);
            }
		});
		limpiarPreregistro();
		return true;
	});
	
	$("#registroDocente").submit(function(e){
		e.preventDefault();
		$.ajax({
			type:"post",
			url:"controlador/RegistroDocente.php",
			data:$("#registroDocente").serialize(),
			success:function(resultado){
				mensaje("Atencion!!",resultado,900,500);
                setTimeout("window.location.replace('./index.php')",3000);
			}
		});
		limpiarRegistroDocente();
		return true;
	});

    $("#ingresoUsuarios").submit(function(e){
    	e.preventDefault();
		if(!validarlogin()){
			return false;  
		}
		return true;
	});
    
});

function validarlogin(){
    
    var usuario = $("#nomusuario").val();
	var contrasena = $("#conusuario").val();
	if(usuario.length == 0 || contrasena.length == 0){
        $("#nomusuario").focus();
		mensaje("Atención!!","Debe ingresar el usuario y la contraseña",300,200);
		return false;
	}
	else{
		$.ajax({
			type:"post",
			url:"controlador/alertas.php",
			data:{nomusuario:usuario, conusuario:contrasena},
			success:function(resultado){
                if(resultado == true){
                    mensaje2("Atencion!!",resultado,900,550);
    			}
				else{
                    mensaje2("Atencion!!",resultado,900,550);
				}
			}
		});
        limpiarUsuariocontrasena();
		
	}
}

function comprobarClave(){
	var clave1 = $("#txtContrasena").val(); 
	var clave2 = $("#txtConfContrasena").val(); 
	if (clave1 != clave2){ 
		mensaje("Atención!!", "Las dos contraseñas no coinciden",300,200);
		return false;
	}
	return true;
} 

/*function salir(){
   var respuesta=confirm("¿Desea usted realmente salir de la pagina?");
   if(respuesta===true)
    window.location= "controlador/cerrarSesion.php";
  else
    return 0;
    
    
    
}*/

function mensaje(titulo,mensaje,ancho,alto){

	$("#mensaje").html(mensaje).dialog({
		title:titulo,
		width:ancho,
		height:alto,
		modal:true,
		resizable:true,
		buttons:{
			Aceptar:function(){
				$(this).dialog('close');  
			}
            
		}
	});
}

function mensaje2(titulo,mensaje2,ancho,alto){

    $("#mensaje").html(mensaje2).dialog({
		title:titulo,
		width:ancho,
		height:alto,
		modal:true,
		resizable:true,
		buttons:{
			"Volver Inicio" :function(){
				$(this).dialog('close');
                window.location.replace("./index.php");
			},
            "Volver Ingresar" :function(){
    			$(this).dialog('close');
			}
		}
	});
}

function limpiarcontrasena(){
    $("#txtContrasena").val("");
	$("#txtConfContrasena").val("");
	$("#txtContrasena").focus();
}

function limpiarUsuariocontrasena(){
    $("#nomusuario").val("");
    $("#conusuario").val("");
	$("#nomusuario").focus();
}

function limpiarPreregistro(){
	$("#txtNombre").val("");
	$("#txtApellidos").val("");
	$("#txtTipoID").val("");
	$("#txtDocumento").val("");
	$("#txtFecha").val("");
	$("#txtGenero").val("");
	$("#txtEmail").val("");
	$("#txtCelular").val("");
	$("#txtFijo").val("");
	$("#txtDireccion").val("");
	$("#txtContrasena").val("");
	$("#txtConfContrasena").val("");
	$("#txtNombre").focus();
}
function limpiarRegistroDocente(){
	$("#txtNombre").val("");
	$("#txtTipoID").val("");
	$("#txtFecha").val("");
	$("#txtEmail").val("");
	$("#txtCelular").val("");
	$("#txtEps").val("");
	$("#txtApellidos").val("");
	$("#txtDocumento").val("");
	$("#txtGenero").val("");
	$("#txtDireccion").val("");
	$("#txtFijo").val("");
	$("#txtFondoPensiones").val("");
	$("#txtTituloPre").val("");
	$("#txtTituloEsp").val("");
	$("#txtTituloMaes").val("");
	$("#txtTituloDoc").val("");
	$("#txtexperiencia").val("");
	$("#facultad").val("");
	$("#programa").val("");
	$("#txtAsignatura1").val("");
	$("#facultad3").val("");
	$("#programa3").val("");
	$("#txtAsignatura3").val("");
	$("#facultad2").val("");
	$("#programa2").val("");
	$("#txtAsignatura2").val("");
	$("#facultad4").val("");
	$("#programa4").val("");
	$("#txtAsignatura4").val("");
	$("#txtNombre").focus();
}