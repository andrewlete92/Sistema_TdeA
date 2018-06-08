<?php 
require 'conexion.php';

if($_POST['action']=='load'){
	$areas = $mysqli->query("
	SELECT * 
	FROM vw_area_coordinador");
	//WHERE user='".$_SESSION['username']."'");
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