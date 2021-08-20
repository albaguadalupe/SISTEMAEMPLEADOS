
				<?php 
				require("mysql/conexion.php");
				class user extends DBA{
					
					public function consulta() {
						$this->sentencia = "SELECT user.id, user.matricula, user.fullname,user.lastname, user.lastname2, user.estanciaestadia, user.programaeducativo, 
						asesorinterno.id_asesorinterno, asesorinterno.nombre, asesorinterno.apellidopaterno, asesorinterno.apellidomaterno 
						FROM user JOIN asesorinterno ON user.id_asesorinterno=asesorinterno.id_asesorinterno;";
						return $this->obtener_sentencia();
					}

					public function consultaEmpleado() {
						$this->sentencia = "SELECT * FROM asesorinterno ORDER BY nombreEmpleado ASC;";
						return $this->obtener_sentencia();
					}

					

				}
				?>
				