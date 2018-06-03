<?php
include_once 'conexion.php';

$users = $mysqli->query("
  SELECT name,UserType 
  FROM tblUsers
  WHERE user = '".$_POST['nomusuario']."'
  AND pass = '".$_POST['conusuario']."'
  ");

if($users->num_rows == 1):
  $data = $users->fetch_assoc();
  session_start();
  echo json_encode(array('error' => false, 'type' => $data['UserType']));
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $_POST['nomusuario'];
else:
  echo json_encode(array('error'=>true));
endif;

$mysqli->close();
?>

