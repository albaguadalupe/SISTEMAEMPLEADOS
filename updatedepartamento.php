<?php
include("config.php");
include("session.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigodep = $_POST['codigodep'];
$telefono = $_POST['telefono'];
$ext = $_POST['ext'];



$sql = "UPDATE departamento SET nombre='$nombre', codigodep='$codigodep'', telefono='$telefono', ext='$ext' 
WHERE nombre='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="userdepartamento.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="userdepartamento.php";';
	echo '</script>';
}
?>