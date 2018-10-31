<?php
class MvcController
{
	#LLAMADA A LA PLANTILLA
	#-------------------------------------
    private $_dato;

	public function pagina()
	{	
		include "views/template.php";
	}

	#ENLACES
	#-------------------------------------
	public function enlacesPaginasController()
	{
		if(isset( $_GET['action']))
		{
			$enlaces = $_GET['action'];
		}
		else
		{
			$enlaces = "index";
		}
		$respuesta = Paginas::enlacesPaginasModel($enlaces);
		include $respuesta;
	}

	###########################################################################################################   aqui empieza #######################################
	################################################################################


	public function ingresoUsuarioController()
	{
		if(isset($_POST['btnIngresar']))
		{	
			$datosController = array("email"=>$_POST['txtEmail'],
									"pass"=>$_POST['txtPassword']);

			$respuesta = Datos::ingresoUsuarioModel($datosController,"usuarios");
			if($respuesta["email"] == $_POST["txtEmail"] && $respuesta["pass"] == $_POST["txtPassword"])
			{
				session_start();
				$_SESSION["id"] = $respuesta["id_usuario"];
				$_SESSION["email"] = $respuesta["email"];
				$_SESSION["pass"] = $respuesta["pass"];
				$_SESSION["name"] = $respuesta["name"];


				echo "<script>
						window.location='index.php?action=dashboard'
					</script>";
			}
			else
			{
				echo'<script type="text/javascript">
        		alert("Correo o contraseña incorrectos");
       			 window.location.href="index.php";
       			 </script>';
				echo "<script>
						window.location='index.php'
					</script>";
			}
		}
	}

	public function actualizarPassController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "pass"=>$_POST["txtPassword"],
									 "email"=>$_POST["txtEmail"]);

			$respuesta = Datos::actualizarPassModel($datosController, "usuarios");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Contraseña Actualizada Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php";
					</script>';	

			}
			else
			{
				echo'<script type="text/javascript">
        		alert("!Usuario no registrado¡");
       			 window.location.href="index.php";
       			 </script>';
			}
		}
	}




	public function actualizarLibroController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "title"=>$_POST["txtNombre"],
									"author"=>$_POST["txtAutor"],
									"description"=>$_POST["txtDescripcion"],
									  "id"=>$_GET["id"]);

			$respuesta = Datos::actualizarLibroModel($datosController, "book");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Libro Actualizado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_libro";
					</script>';	

			}
			else
			{
				echo'<script type="text/javascript">
        		alert("Error");
       			 window.location.href="index.php";
       			 </script>';
			}
		}
	}


	public function actualizarDeporteController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "nombre"=>$_POST["txtNombre"],
										"id_deporte"=>$_GET["id"]);

			$respuesta = Datos::actualizarDeporteModel($datosController, "deportes");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Deporte Actualizado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_deportes";
					</script>';	

			}
			else
			{
				echo'<script type="text/javascript">
        		alert("Error");
       			 window.location.href="index.php";
       			 </script>';
			}
		}
	}



	public function actualizarEquipoController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "nombre"=>$_POST["txtNombre"],
										"id_deporte"=>$_POST["select_deporte"],
										"id_equipo"=>$_GET["id"]);

			$respuesta = Datos::actualizarEquipoModel($datosController, "equipos");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Equipo Actualizado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_equipos";
					</script>';	

			}
			else
			{
				echo'<script type="text/javascript">
        		alert("Error");
       			 window.location.href="index.php";
       			 </script>';
			}
		}
	}


	public function actualizarUsuarioController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "email"=>$_POST["txtUsername"],
									"pass"=>$_POST["txtPassword"],
									"name"=>$_POST["txtNombre"],
									"id_usuario"=>$_SESSION["id"]);

			$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");
			if($respuesta == "success")
			{
				$_SESSION["name"]=$_POST["txtNombre"];
				$_SESSION["email"] = $_POST["txtUsername"];
				$_SESSION["pass"] = $_POST["txtPassword"];

 
				echo '<script type="text/javascript">
						alert("Usuario Actualizado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=dashboard";
					</script>';

			}
			else
			{
				echo'<script type="text/javascript">
        		alert("Error");
       			 window.location.href="index.php";
       			 </script>';
			}
		}
	}

	


	public function editarLibroController()
	{
		if(isset($_GET["id"]))
		{
			$idLibro = $_GET["id"];
			$respuesta = Datos::editarLibroModel($idLibro,"book");
			return $respuesta;
		}
	}


	public function editarDeporteController()
	{
		if(isset($_GET["id"]))
		{
			$idDeporte = $_GET["id"];
			$respuesta = Datos::editarDeporteModel($idDeporte,"deportes");
			return $respuesta;
		}
	}

	public function editarEquipoController()
	{
		if(isset($_GET["id"]))
		{
			$idEquipo = $_GET["id"];
			$respuesta = Datos::editarEquipoModel($idEquipo,"equipos");
			return $respuesta;
		}
	}
	public function editarJugadorController()
	{
		if(isset($_GET["id"]))
		{
			$idJugador = $_GET["id"];
			$respuesta = Datos::editarJugadorModel($idJugador,"jugadores");
			return $respuesta;
		}
	}

	public function registroLibroController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "title"=>$_POST["txtNombre"],"author"=>$_POST["txtAutor"],"description"=>$_POST["txtDescripcion"]);

			$respuesta = Datos::registroLibroModel($datosController, "book");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Libro Agregada Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_libro";
					</script>';	

			}
			else
			{
				echo "Error";
			}
		}
	}

	public function registroEquipoController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "nombre"=>$_POST["txtNombre"],"id_deporte"=>$_POST["select_deporte"]);

			$respuesta = Datos::registroEquipoModel($datosController, "equipos");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Equipo Agregada Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_equipos";
					</script>';	

			}
			else
			{
						echo '<script type="text/javascript">
						alert("Error!");
					 </script>';			}
		}
	}
	public function registroJugadorController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "nombre"=>$_POST["txtNombre"],"apellido"=>$_POST["txtApellido"],"edad"=>$_POST["txtEdad"],"posicion"=>$_POST["txtPosicion"]);

			$respuesta = Datos::registroJugadorModel($datosController, "jugadores");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Jugador Agregado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_jugadores";
					</script>';	

			}
			else
			{
						echo '<script type="text/javascript">
						alert("Error!");
					 </script>';			}
		}
	}

	public function registroEquipoJugadorController()
	{
		if(isset($_POST["btnEnviar"]))
		{
			$datosController = array( "id_equipo"=>$_POST["txtEquipo"],"id_jugador"=>$_GET["id"]);

			$respuesta = Datos::registroEquipoJugadorModel($datosController, "equipo_jugador");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Equipo Agregado Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=equipos_jugador&id=$_GET["id"]";
					</script>';	

			}
			else
			{
						echo '<script type="text/javascript">
						alert("Error!");
					 </script>';			}
		}
	}

	public function registroUsuarioController()
	{
		if(isset($_POST["btnAgregar"]))
		{

				 
		
			$datosController = array( "email"=>$_POST["txtEmail"],"pass"=>$_POST["txtPassword"],"name"=>$_POST["txtNombre"]);

			$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");
			if($respuesta == "success")
			{
				 
				echo '<script type="text/javascript">
						alert("Usuario Agregada Exitosamente!");
					 </script>';

					 echo '<script type="text/javascript">
						window.location.href = "index.php?action=vista_usuarios";
					</script>';	

			}
			else
			{
				echo "Error";
			}
		}
	}



	public function getCantidadUsuariosController()
	{
		$cantidad_usuarios = Datos::getCantidadUsuariosModel();
		echo '<h3>'.$cantidad_usuarios["cantidad"].'</h3>';
	}



	public function getCantidadDeportesController()
	{
		$cantidad_deportes = Datos::getCantidadDeportesModel();
		echo '<h3>'.$cantidad_deportes["cantidad"].'</h3>';
	}

	public function getCantidadEquiposController()
	{
		$cantidad_equipos = Datos::getCantidadEquiposModel();
		echo '<h3>'.$cantidad_equipos["cantidad"].'</h3>';
	}


	public function vistaDeporteController()
	{
		 
			$arrayRespuesta = Datos::vistaDeportesModel("deportes");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>';
								echo '<th>Editar</th>
								<th>Eliminar</th>';
							
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			echo'
				
					<tr>
						<td>'.$item["id_deporte"].'</td>
						<td>'.$item["nombre"].'</td>'; 
								echo '
								<td> <a title="Editar" href="index.php?action=editar_deporte&id='.$item["id_deporte"].'"> 
							        <button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
							     </a> 
								</td>
								<td> <button title="Borrar" onClick="borrar('.$item["id_deporte"].');" class="btn btn-danger" title= "Eliminar Deporte"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
								</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Deporte eliminado", "success");
		                window.location.href = "index.php?action=vista_deportes&idBorrar="+id_deporte;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}


	public function getDeportesSelectController()
	{
		$todasCarreras = Datos::getDeportesSelectModel("deportes");
		
		foreach($todasCarreras as $row => $item)
		{
		echo '
				<option value="'.$item["id_deporte"].'"> '.
					$item["nombre"].'
				</option> 
			';
		}
	}

	public function getEquiposSelectController()
	{
		$todasCarreras = Datos::getEquiposSelectModel("equipos");
		
		foreach($todasCarreras as $row => $item)
		{
		echo '
				<option value="'.$item["id_equipo"].'"> '.
					$item["nombre"].'
				</option> 
			';
		}
	}


	public function getDeportePorIdController($idDeporte)
	{
		return $nombre = Datos::getDeportePorIdModel("deportes",$idDeporte);
	}

	public function vistaEquipoController()
	{
		 
			$arrayRespuesta = Datos::vistaEquiposModel("equipos");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Deporte</th>';
								echo '<th>Editar</th>
								<th>Eliminar</th>';
							
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			$nombreDeporte = Datos::getDeportePorIdModel("deportes",$item["id_deporte"]);
			
			echo'
				
					<tr>
						<td>'.$item["id_equipo"].'</td>
						<td>'.$item["nombre"].'</td>
						<td>'.$nombreDeporte["nombre"].'</td>'; 
								echo '
								<td> <a title="Editar" href="index.php?action=editar_equipo&id='.$item["id_equipo"].'"> 
							        <button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
							     </a> 
								</td>
								<td> <button title="Borrar" onClick="borrar('.$item["id_equipo"].');" class="btn btn-danger" title= "Eliminar Deporte"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
								</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Deporte eliminado", "success");
		                window.location.href = "index.php?action=vista_deportes&idBorrar="+id_deporte;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}


	public function vistaJugadoresController()
	{
		 
			$arrayRespuesta = Datos::vistaJugadoresModel("jugadores");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Edad</th>
							<th>posicion</th>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Equipos</th>';
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			echo'
				
					<tr>
						<td>'.$item["id"].'</td>
						<td>'.$item["nombre"].'</td>
						<td>'.$item["apellido"].'</td>
						<td>'.$item["edad"].'</td>
						<td>'.$item["posicion"].'</td>
						<td> <a title="Editar" href="index.php?action=editar_jugador&id='.$item["id"].'"> 
						       <button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
						    </a> 
						</td>
						<td> <button title="Borrar" onClick="borrar('.$item["id"].');" class="btn btn-danger" title= "Eliminar Jugador"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
							
						<td> <a title="Equipos del jugador" href="index.php?action=equipos_jugador&id='.$item["id"].'"> 
						       <button class="btn btn-warning"><i class="fa fa-eye"></i> Ver Equipos</button>
						    </a> 
						</td>
						</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Libro eliminado", "success");
		                window.location.href = "index.php?action=vista_libro&idBorrar="+id;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}

	public function vistaUsuariosController()
	{
		 
			$arrayRespuesta = Datos::vistaJugadoresModel("usuarios");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Usename</th>
							<th>Edad</th>
							<th>Editar</th>';
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			echo'
				
					<tr>
						<td>'.$item["id_usuario"].'</td>
						<td>'.$item["name"].'</td>
						<td>'.$item["email"].'</td>
						
						<td> <a title="Editar" href="index.php?action=editar_usario&id='.$item["id_usuario"].'"> 
						       <button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
						    </a> 
						</td>
						<td> <button title="Borrar" onClick="borrar('.$item["id"].');" class="btn btn-danger" title= "Eliminar Jugador"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
							
						</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Libro eliminado", "success");
		                window.location.href = "index.php?action=vista_libro&idBorrar="+id;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}
	public function vistaEquiposJugadorController()
	{
		 
			$arrayRespuesta = Datos::vistaEquiposJugadorModel("equipos","equipo_jugador");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Eliminar</th>
							';
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			echo'
				
					<tr>
						<td>'.$item["id_equipo"].'</td>
						<td>'.$item["nombre"].'</td>
						<td> <button title="Borrar" onClick="borrar('.$item["id_equipo"].');" class="btn btn-danger" title= "Eliminar Jugador"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
						
						</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Libro eliminado", "success");
		                window.location.href = "index.php?action=vista_libro&idBorrar="+id;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}

	public function vistaEquiposController()
	{
		 
			$arrayRespuesta = Datos::vistaEquiposModel("equipos");
			echo '
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>';

								echo '<th>Editar</th>
								<th>Eliminar</th>';
							
						echo '</tr>
					</thead><tbody>';
			foreach($arrayRespuesta as $row => $item)
			{
			echo'
				
					<tr>
						<td>'.$item["id_equipo"].'</td>
						<td>'.$item["nombre"].'</td>'; 
								echo '
								<td> <a title="Editar" href="index.php?action=editar_libro&id='.$item["id"].'"> 
							        <button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
							     </a> 
								</td>
								<td> <button title="Borrar" onClick="borrar('.$item["id"].');" class="btn btn-danger" title= "Eliminar Libro"> 
								<i class="fa fa-trash"></i> Eliminar </button></center> </td>
								</tr> ';
							
			}
			echo '</tbody></table>';
			echo '<script type="text/javascript">
	        var password="'.$_SESSION["pass"].'";
	        function borrar(id){
	          swal("Ingrese su contraseña:", {
	            content: "input",
		          })
		          .then((value) => 
		          {
		              if (value==password) 
		              {
		                swal("Contraseña correcta", "Libro eliminado", "success");
		                window.location.href = "index.php?action=vista_libro&idBorrar="+id;
		              }
		              else
		              {
		                swal("Contraseña Incorrecta", "Intente de nuevo", "error");
		              }     
		          });
		        } 
		    </script>';
    	 
    	
	}


	public function borrarLibroController()
	{
		if(isset($_GET["idBorrar"]))
		{
			$respuesta = Datos::borrarLibroModel($_GET["idBorrar"],"book");
			if($respuesta == "success")
			{
				echo "<script>
						window.location='index.php?action=vista_libro'
					</script>";
			}
			else
			{
				echo "error";
			}
		}
	} 

	public function borrarDeporteController()
	{
		if(isset($_GET["idBorrar"]))
		{
			$respuesta = Datos::borrarDeporteModel($_GET["idBorrar"],"deportes");
			if($respuesta == "success")
			{
				echo "<script>
						window.location='index.php?action=vista_deportes'
					</script>";
			}
			else
			{
				echo "error";
			}
		}
	} 






	###########################################################################################################   aqui termina #######################################
	################################################################################

	
}
?>