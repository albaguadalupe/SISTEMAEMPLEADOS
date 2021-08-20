<?php
include("config.php");
include("session.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$dependencia = $_POST['dependencia'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];



$sql = "UPDATE empresa SET nombre='$nombre', dependencia='$dependencia', correo='$correo', telefono='$telefono'
WHERE nombre='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="usersempresa.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="usersempresa.php";';
	echo '</script>';
}
?>