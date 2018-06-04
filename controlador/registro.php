<?php
include_once 'conexion.php';
mysql_query("INSERT INTO `formulario`(`nombre`, `apellido`, `tipoDocumento`, `nombreUsuario`, `fechaNacimiento`, `genero`, `direccion`, `telefonoFijo`, `telefonoCelular`, `email`)
	VALUES ('$_REQUEST[txtNombre]','$_REQUEST[txtApellidos]','$_REQUEST[txtTipoID]','$_REQUEST[txtDocumento]','$_REQUEST[txtFecha]','$_REQUEST[txtGenero]','$_REQUEST[txtDireccion]','$_REQUEST[txtFijo]','$_REQUEST[txtCelular]','$_REQUEST[txtEmail]')", $conexion)
or die("Problemas en el insert: ".mysql_error());


mysql_query("INSERT INTO `tblUsers`(`nombreUsuario`, `contrasena`)
	VALUES ('$_REQUEST[txtDocumento]','$_REQUEST[txtContrasena]')", $conexion)
or die("Problemas en el insert: ".mysql_error());
echo "Su Registro fue exitoso.";
header('refresh:2; url=../vista/ingreso.php');
?>    
		