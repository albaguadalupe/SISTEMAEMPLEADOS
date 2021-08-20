<?php
include("config.php");
include("session.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$dependencia = $_POST['dependencia'];
$telefono = $_POST['telefono'];


$sql = "INSERT INTO empresa(nombre, correo, dependencia, telefono) 
VALUES('$nombre', '$correo', '$dependencia', '$telefono' )";
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