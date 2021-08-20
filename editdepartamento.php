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
<h2>Actualizar Departamento</h2>
<hr/>

<form action="updatedepartamento.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM departamento WHERE nombre ='$id'");
	while($row = mysqli_fetch_array($result))
	{

	echo"<input type='hidden' name='id' value='{$row['nombre']}' required>";
	 	echo"<label><b>Nombre departamento</b>";
    echo"<input type='text' placeholder='Nombre' name='nombre' value='{$row['nombre']}' required>";
	echo"<label><b>codigodep</b>";
    echo"<input type='text' placeholder='codigodep electronico' name='codigodep' value='{$row['codigodep']}' required>";
	echo"<label><b>telefono</b>";
    echo"<input type='text' placeholder='Telefno' name='telefono' value='{$row['telefono']}' required>";
	echo"<label><b>ext</b>";
    echo"<input type='text' placeholder='ext' name='ext' value='{$row['ext']}' required>";
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>