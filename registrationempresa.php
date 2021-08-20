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
<h2>Registro empresa</h2>
<hr/>
</body>
<form action="registerempres.php" method="POST">

             <center>
             <table border=0>
             <tr>
             </div></div>
			 <div class="col-md-12 col-sm-12 contact-form">
             <label>Nombre*:</label>
			 <input type="text" placeholder="Intoduce Nombre" name="nombre" required>
                   
           </div>
		    <div class="col-md-12 col-sm-12 contact-form">
             <label>Correo*:</label>
			 <input type="text" placeholder="Intoduce Correo" name="correo" required>
                   
           </div>
		    <div class="col-md-12 col-sm-12 contact-form">
             <label>Dependencia*:</label>
			 <input type="text" placeholder="Intoduce dependencia" name="dependencia" required>
                   
           </div>
		    <div class="col-md-12 col-sm-12 contact-form">
             <label>Telefono*:</label>
			 <input type="text" placeholder="Intoduce telefono" name="telefono" required>
                   
           </div>
					 
					  <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
</form>