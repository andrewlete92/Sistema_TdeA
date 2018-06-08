<?php 
require 'conexion.php';

if($_POST['action']=='insert'){
	$codAsignatura = $_POST['txtCodAsignatura'];
	$asignatura = $_POST['txtAsignatura'];
	$grupo = $_POST['txtGrupo'];
	$matriculados = $_POST['txtMatriculados'];
	$aprobados = $_POST['txtAprobados'];
	$reprobados = $_POST['txtReprobados'];
	$nomMufor = $_POST['Mufor'];
	$nomConcer = $_POST['Concer'];
	$mufor = $mysqli->query("SELECT idArchivo FROM tblArchivos WHERE nombre = '$nomMufor' AND typeArch = 'Mufor'");
	$muforId = $mufor->fetch_object();
	$idArchivoMufor = $muforId->idArchivo;
	$concer = $mysqli->query("SELECT idArchivo FROM tblArchivos WHERE nombre = '$nomConcer' AND typeArch = 'Concertacion'");
	$concerId = $concer->fetch_object();
	$idArchivoConcer = $concerId->idArchivo;
	$sql = "INSERT INTO tblGrupoInfo (grupo, asignatura, Matriculados, Aprobados, Reprobados, Mufor, Concertacion )
	VALUES ('$grupo', '$asignatura', '$matriculados', '$aprobados','$reprobados', $idArchivoMufor, $idArchivoConcer)";
	if(mySqli_query($mysqli,$sql)){
		echo json_encode(array('answ' =>false));
	} else {
		echo json_encode(array('answ' =>true));
	}
	//echo json_encode(array('answ' =>$reprobados));
} 

$mysqli->close();
?>