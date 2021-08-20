<?php
include("config.php");
include("session.php");
$nombreCompleto = $_POST['nombreCompleto'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$correo = $_POST['correo'];
$genero = $_POST['genero'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$fechaingreso = $_POST['fechaingreso'];

$sql = "INSERT INTO empleados(nombreCompleto, fechaNacimiento, correo, genero, telefono, celular,fechaingreso) 
VALUES('$nombreCompleto', '$fechaNacimiento', '$correo', '$genero', '$telefono', '$celular' ,'$fechaingreso')";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="usersempresa.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="usersempresa.php";';
	echo '</script>';
}
?>

