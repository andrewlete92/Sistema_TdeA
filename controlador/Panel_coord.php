<?php 
require 'conexion.php';
session_start();
if($_POST['action']=='load'){
$usuario = $_SESSION['username'];
	$areas = $mysqli->query("
	SELECT * 
	FROM vw_area_coordinador
	WHERE Usuario='$usuario'");
	if ($areas->num_rows!=null){
	$data = $areas->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
	}else{
	echo json_encode(array('error' =>true));
	}
} elseif($_POST['action']=='find'){
	$cod = $_POST['id'];
	$grupos = $mysqli->query("
	SELECT * FROM vw_asignaturas_coordinador WHERE idArea = '$cod'");
	if ($grupos->num_rows!=null){
	$data = $grupos->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
	}else{
	echo json_encode(array('error' =>true));
	}
}

$mysqli->close();
?>