<?php 
require 'conexion.php';

if(isset($_FILES['archivoMufor']['name'])){
	$nomarchivo = $_FILES['archivoMufor']['name'];
	$type = $_FILES['archivoMufor']['type'];
	$size = $_FILES['archivoMufor']['size'];
	$ruta = $_FILES['archivoMufor']['tmp_name'];
	$dest = '../archivos/MUFOR/'.$nomarchivo;
	if (copy($ruta, $dest)) {
		$sql = "INSERT INTO tblArchivos (nombre,tipo,size,ruta,typeArch) 
		VALUES ('$nomarchivo', '$type', '$size', '$dest', 'Mufor')";
		if(mySqli_query($mysqli,$sql)){
			echo json_encode(array('answ' =>false));
		} else {
			echo json_encode(array('answ' =>true));
		}
	}
}
if(isset($_FILES['archivoConcer']['name'])){
	$nomarchivo = $_FILES['archivoConcer']['name'];
	$type = $_FILES['archivoConcer']['type'];
	$size = $_FILES['archivoConcer']['size'];
	$ruta = $_FILES['archivoConcer']['tmp_name'];
	$dest = '../archivos/CONCERTACION/'.$nomarchivo;
	if (copy($ruta, $dest)) {
		$sql = "INSERT INTO tblArchivos (nombre,tipo,size,ruta, typeArch) 
		VALUES ('$nomarchivo', '$type', '$size', '$dest', 'Concertacion')";
		if(mySqli_query($mysqli,$sql)){
			echo json_encode(array('answ' =>false));
		} else {
			echo json_encode(array('answ' =>true));
		}
	}
} 

$mysqli->close();
?>