<?php
include("config.php");
include("session.php");

$nombre = $_POST['nombre'];
$codigodep = $_POST['codigodep'];
$telefono = $_POST['telefono'];
$ext = $_POST['ext'];


$sql = "INSERT INTO departamento(nombre, codigodep,  telefono, ext) 
VALUES('$nombre', '$codigodep', '$telefono', '$ext')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="usersdepartamento.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="usersdepartamento.php";';
	echo '</script>';
}
?>