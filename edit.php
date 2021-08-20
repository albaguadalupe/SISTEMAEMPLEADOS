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
<h2>Actualizar Empleado</h2>
<hr/>

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM empleados WHERE nombreCompleto ='$id'");
	while($row = mysqli_fetch_array($result))
	{

	echo"<input type='hidden' name='id' value='{$row['nombreCompleto']}' required>";
	 	echo"<label><b>Nombre completo</b>";
    echo"<input type='text' placeholder='Nombre' name='nombreCompleto' value='{$row['nombreCompleto']}' required>";
	 	echo"<label><b>Fecha nacimiento</b>";
    echo"<input type='date' placeholder='fecha de Nacimiento' name='fechaNacimiento' value='{$row['fechaNacimiento']}' required>";
	echo"</label>";
	echo"<label><b>correo</b>";
    echo"<input type='text' placeholder='correo electronico' name='correo' value='{$row['correo']}' required>";
  	echo"<label><b>Genero</b>";
    echo"<input type='text' placeholder='Genero' name='genero' value='{$row['genero']}' required>";
	echo"<label><b>telefono</b>";
    echo"<input type='text' placeholder='Telefno' name='telefono' value='{$row['telefono']}' required>";
	echo"<label><b>celular</b>";
    echo"<input type='text' placeholder='celular' name='celular' value='{$row['celular']}' required>";
	echo"<label><b>Fecha ingreso</b>";
echo "<td>" . $row['fechaingreso'] . "</td>";
    echo"</label>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>