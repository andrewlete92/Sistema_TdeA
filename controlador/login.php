<?php
include_once 'conexion.php';

$users = $mysqli->query("
  SELECT *
  FROM vw_login
  WHERE usuario = '".$_POST['nomusuario']."'
  AND pass = '".$_POST['conusuario']."'
  ");

if($users->num_rows == 1):
  $data = $users->fetch_assoc();
  session_start();
  echo json_encode(array('error' => false, 'type' => $data['cargo']));
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $_POST['nomusuario'];
else:
  echo json_encode(array('error'=>true));
endif;

$mysqli->close();
?>

