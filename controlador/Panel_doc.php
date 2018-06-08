<?php 
require 'conexion.php';
session_start();
if($_POST['action']=='load'){
$usuario = $_SESSION['username'];
$asignaturas = $mysqli->query("
	SELECT *
	FROM vw_asignaturas_docente
	WHERE Usuario ='$usuario'");

	if ($asignaturas->num_rows!=null){
	$data = $asignaturas->fetch_all(MYSQLI_ASSOC);
	echo json_encode($data);
	}else{
	echo json_encode(array('error' =>$usuario));
	}
} elseif ($_POST['action']=='save') {
	# code...
}

//WHERE user='".$_SESSION['username']."'

$mysqli->close();
?>

