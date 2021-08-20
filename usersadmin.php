<?php
	include("session.php");
	include("indexmenu.html");
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM users WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM users";
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
				  <a ><i ></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Administradores</h2>
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
<th>Apellido</th>
<th>Segundo Apellido</th>
<th>Fecha Nacimiento</th>
<th>Actualizar</th>
<th>Eliminar</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['middlename'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['birthdate'] . "</td>";
echo "<td><a href='editadmin.php?id=".$row['username']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
echo "<td><a href='deleteadmin.php?id=".$row['username']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 