<?php

	include("session.php");
	include("indexmenu.html");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM empleados WHERE nombreCompleto LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM empleados";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
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
<h2>Empleados</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<br />
<?php


echo "<table border='1'>
<tr>
<th>Nombre</th>
<th>Fecha Nacimiento</th>
<th>Correo</th>
<th>Genero</th>
<th>Celular</th>
<th>Telefono</th>
<th>Fecha Ingreso</th>
<th>Actualizar</th>
<th>Eliminar</th>
<th>Imprimir</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nombreCompleto'] . "</td>";
echo "<td>" . $row['fechaNacimiento'] . "</td>";
echo "<td>" . $row['correo'] . "</td>";
echo "<td>" . $row['genero'] . "</td>";
echo "<td>" . $row['celular'] . "</td>";
echo "<td>" . $row['telefono'] . "</td>";
echo "<td>" . $row['fechaingreso'] . "</td>";
echo "<td><a href='edit.php?id=".$row['nombreCompleto']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='delete.php?id=".$row['nombreCompleto']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "<td><a href='print.php?id=".$row['nombreCompleto']."'><img src='./images/icons8-Print-32.png' alt='Print'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 