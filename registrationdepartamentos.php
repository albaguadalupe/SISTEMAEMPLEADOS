<?php
	include("session.php");
	include("indexmenu.html");
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
<h2>Registrarse</h2>
<hr/>
</body>
<form action="registerdepartamento.php" method="POST">

             <center>
             <table border=0>
             <tr>
             </div></div>
			 <div class="col-md-12 col-sm-12 contact-form">
             <label>Nombre del departamento:</label>
			 <input type="text" placeholder="Intoduce Nombre del departamento" name="nombre" required>
                   
           </div>
					 <div class="col-md-12 col-sm-12 contact-form">
            <label>codigodep:</label>
			<input type="text" placeholder="Intoduce codigo del departamento" name="codigodep" required>
                   
					    </div>
				 <div class="col-md-12 col-sm-12 contact-form">
            <label>telefono:</label>
			<input type="int" placeholder="Intoduce telefono" name="telefono" required>
                   
					    </div>
				 <div class="col-md-12 col-sm-12 contact-form">
            <label>ext:</label>
			<input type="int" placeholder="Intoduce ext" name="ext" required>
                   
					    </div>
					 
					  <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
</form>