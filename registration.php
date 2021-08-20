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
				  <a ><i ></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
</body>
>
<div action="registers.php" method="POST"   align="center">


             <center>
             <table border=0>
             <tr>
             </div></div>
			 <div class="col-md-12 col-sm-12 contact-form">
             <label>Nombre:</label>
			 <input type="text" placeholder="Intoduce Nombre " name="nombreCompleto" required>
                   
           </div>
					 <div class="col-md-12 col-sm-12 contact-form">
            <label>fechanacimiento:</label>
			<input type="date" placeholder="Intoduce fecha de nacimiento" name="fechaNacimiento" required>
                   
					    </div>
				
					
            <div class="col-md-12 col-sm-12 contact-form">
             <label>correo*:</label>
			 <input type="text" placeholder="Intoduce correo electronico" name="correo" required>
                   
           </div>
        <label>celular:</label>
			<input type="int" placeholder="Intoduce celular" name="celular" >
		   </div>
		    &nbsp; &nbsp; &nbsp; 
        <label>telefono:</label>
			<input type="int" placeholder="Intoduce telefono" name="telefono" >
		   </div>    &nbsp; &nbsp;&nbsp;
                   
		 <label for="genero">Genero:</label>
         <select id="genero" name="genero" >
		 <option value="">-- Selecciona una opcion--</option>
        <option value="masculino">Masculino</option>
		<option value="lfemenino">Femenino</option>
       
    </select>
	</div>
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      
			 <div class="col-md-12 col-sm-12 contact-form">
            <label>Fecha Ingreso:</label>
                    <input type="date" placeholder="Intoduce fecha ingreso" name="fechaingreso" >
                     </div>
					 
	
					  <div class="clearfix">
      <button type="submit" class="signupbtn">Registrarse</button>
	  <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
</form>             