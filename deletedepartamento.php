<?php
include("config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM departamento WHERE nombre='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="usersdepartamento.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="usersdepartamento.php";';
	echo '</script>';
}
?>