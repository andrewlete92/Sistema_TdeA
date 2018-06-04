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
}

$mysqli->close();
?>