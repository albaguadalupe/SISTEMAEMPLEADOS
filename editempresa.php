<?php
	include("session.php");
	include("config.php");
	include("indexmenu.html");
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
    <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a> 
  <a ><i ></i></a>  
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar Empresa</h2>
<hr/>

<form action="updateempresa.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM empresa WHERE nombre ='$id'");
	while($row = mysqli_fetch_array($result))
	{

	echo"<input type='hidden' name='id' value='{$row['nombre']}' required>";
	 	echo"<label><b>Nombre</b>";
    echo"<input type='text' placeholder='Nombre' name='nombreCompleto' value='{$row['nombre']}' required>";
	echo"<label><b>correo</b>";
    echo"<input type='text' placeholder='correo electronico' name='correo' value='{$row['correo']}' required>";
  	echo"<label><b>dependencia</b>";
    echo"<input type='text' placeholder='dependencia' name='dependencia' value='{$row['dependencia']}' required>";
	echo"<label><b>telefono</b>";
    echo"<input type='text' placeholder='Telefno' name='telefono' value='{$row['telefono']}' required>";
	
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>