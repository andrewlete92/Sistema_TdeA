<?php 
require 'conexion.php';

if($_POST['action']=='load'){
$asignaturas = $mysqli->query("
	SELECT *
	FROM vw_asignaturas_docente");
	//WHERE Usuario =".$_SESSION['username']);

	if ($asignaturas->num_rows!=null){
	$data = $asignaturas->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
	}else{
	echo json_encode(array('error' =>true));
	}
} elseif ($_POST['action']=='save') {
	# code...
}

//WHERE user='".$_SESSION['username']."'

$mysqli->close();
?>

