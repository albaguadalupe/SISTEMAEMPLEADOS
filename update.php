<?php
include("config.php");
include("session.php");
$id = $_POST['id'];
$nombreCompleto = $_POST['nombreCompleto'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$fechaingreso = $_POST['fechaingreso'];


$sql = "UPDATE empleados SET nombreCompleto='$nombreCompleto', fechaNacimiento='$fechaNacimiento', correo='$correo', genero='$genero', telefono='$telefono', celular='$celular' ,telefono='$telefono' fechaingreso='$fechaingreso' 
WHERE nombreCompleto='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>