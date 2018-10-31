<?php
require_once "conexion.php";

class Datos extends Conexion
{



	###########################################################################################################   aqui empieza #######################################
	################################################################################
	

	public static function ingresoUsuarioModel($datosModel, $table)
	{
		$statement = Conexion::conectar()->prepare("SELECT * FROM $table WHERE email = :email and pass = :pass");	
		$statement->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$statement->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
		$statement->execute();
		return $statement->fetch();
		
		$statement->close();
	}
	
	public static function editarLibroModel($idLibro,$tabla)
 	{
 		$stm = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id = :id");
 		$stm->bindParam(":id", $idLibro, PDO::PARAM_INT);
 		$stm->execute();
 		return $stm->fetch();
 		$stm->close();
 	}

 	public static function editarDeporteModel($idDeporte,$tabla)
 	{
 		$stm = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_deporte = :id_deporte");
 		$stm->bindParam(":id_deporte", $idDeporte, PDO::PARAM_INT);
 		$stm->execute();
 		return $stm->fetch();
 		$stm->close();
 	}

 	public static function editarEquipoModel($idDeporte,$tabla)
 	{
 		$stm = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_equipo = :id_equipo");
 		$stm->bindParam(":id_equipo", $idDeporte, PDO::PARAM_INT);
 		$stm->execute();
 		return $stm->fetch();
 		$stm->close();
 	}


 	public static function editarJugadorModel($idJugador,$tabla)
 	{
 		$stm = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_jugador = :id_jugador");
 		$stm->bindParam(":id_jugador", $idJugador, PDO::PARAM_INT);
 		$stm->execute();
 		return $stm->fetch();
 		$stm->close();
 	}
	public static function registroLibroModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (title,author,description) VALUES (:title,:author,:description)");	
		$stmt->bindParam(":title", $datosModel["title"], PDO::PARAM_STR);
		$stmt->bindParam(":author", $datosModel["author"], PDO::PARAM_STR);
		$stmt->bindParam(":description", $datosModel["description"], PDO::PARAM_STR);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}


	public static function getDeportePorIdModel($tabla,$idDeporte)
	{
		$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla WHERE id_deporte = :id_deporte");	
		$stmt->bindParam(":id_deporte",$idDeporte,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}

	public static function getCarreraPorIdModel($tabla,$idModel)
	{
		$stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla WHERE id_carrera = :id_carrera");	
		$stmt->bindParam(":id_carrera",$idModel,PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
		$stmt->close();
	}


	public static function registroEquipoModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,id_deporte) VALUES (:nombre,:id_deporte)");	
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id_deporte", $datosModel["id_deporte"], PDO::PARAM_STR);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}

	public static function registroJugadorModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,apellido,edad,posicion) VALUES (:nombre,:apellido,:edad,:posicion)");	
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $datosModel["apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_STR);
		$stmt->bindParam(":posicion", $datosModel["posicion"], PDO::PARAM_STR);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}

	public static function registroEquipoJugadorModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_equipo,id_jugador) VALUES (:id_equipo,:id_jugador)");	
		$stmt->bindParam(":id_equipo", $datosModel["id_equipo"], PDO::PARAM_INT);
		$stmt->bindParam(":id_jugador", $datosModel["id_jugador"], PDO::PARAM_INT);
		
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}
	

	public static function registroUsuarioModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (email,pass,name) VALUES (:email,:pass,:name)");	
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}



	public static function vistaJugadoresModel($tabla)
	{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}

	public static function vistaUsuarioModel($tabla)
	{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}

	public static function vistaEquiposJugadorModel($tabla,$tabla2)
	{

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla as e INNER JOIN $tabla2 as ej on e.id_equipo = ej.id_equipo WHERE id_jugador = :id_jugador");
			$stmt->bindParam(":id_jugador", $_GET["id"], PDO::PARAM_INT);

			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}

	public static function getDeportesSelectModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}
	public static function getEquiposSelectModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}


	public static function vistaEquiposModel($tabla)
	{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}



	public static function vistaDeportesModel($tabla)
	{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}

	public static function vistaEquipposModel($tabla)
	{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); 
			if($stmt->execute())
			{
				return $stmt->fetchAll();
			}
			$stmt->close();
	}


	public static function getCantidadUsuariosModel()
	{
		$stmt = Conexion::conectar()->prepare("SELECT count(*) as cantidad FROM usuarios");	
		if($stmt->execute())
		{
			$cantidad = $stmt->fetch();	
			return $cantidad;
		}
		else
		{
			echo "no traje ltodooooooos los productooooo0oooooooooooos";
		}
		$stmt->close();
	}

	

	public static function getCantidadDeportesModel()
	{
		$stmt = Conexion::conectar()->prepare("SELECT count(*) as cantidad FROM deportes");	
		if($stmt->execute())
		{
			$cantidad = $stmt->fetch();	
			return $cantidad;
		}
		else
		{
			echo "no traje ltodooooooos los productooooo0oooooooooooos";
		}
		$stmt->close();
	}

	public static function getCantidadEquiposModel()
	{
		$stmt = Conexion::conectar()->prepare("SELECT count(*) as cantidad FROM equipos");	
		if($stmt->execute())
		{
			$cantidad = $stmt->fetch();	
			return $cantidad;
		}
		else
		{
			echo "no traje ltodooooooos los productooooo0oooooooooooos";
		}
		$stmt->close();
	}
	
	public static function actualizarLibroModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET title = :title, author=:author, description=:description WHERE id = :id");	
		$stmt->bindParam(":title", $datosModel["title"], PDO::PARAM_STR);
		$stmt->bindParam(":author", $datosModel["author"], PDO::PARAM_STR);
		$stmt->bindParam(":description", $datosModel["description"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}

	public static function actualizarDeporteModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id_deporte = :id_deporte");	
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id_deporte", $datosModel["id_deporte"], PDO::PARAM_INT);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}


	public static function actualizarEquipoModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, id_deporte=:id_deporte WHERE id_equipo = :id_equipo");	
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":id_deporte", $datosModel["id_deporte"], PDO::PARAM_INT);
		$stmt->bindParam(":id_equipo", $datosModel["id_equipo"], PDO::PARAM_STR);

		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}

	public static function actualizarPassModel($datosModel, $tabla)
	{
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET pass = :pass where email=:email");	


		$stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}


	public static function borrarLibroModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id_libro");	
		$stmt->bindParam(":id_libro", $datosModel, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}

	public static function borrarDeporteModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_deporte = :id_deporte");	
		$stmt->bindParam(":id_deporte", $datosModel, PDO::PARAM_INT);
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}




	public static function actualizarUsuarioModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET email = :email, pass=:pass, name=:name WHERE id_usuario = :id_usuario");	
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":pass", $datosModel["pass"], PDO::PARAM_STR);
		$stmt->bindParam(":name", $datosModel["name"], PDO::PARAM_STR);
		$stmt->bindParam(":id_usuario", $_SESSION["id"], PDO::PARAM_STR);
		
		if($stmt->execute())
		{
			return "success";
		}
		else
		{
			return "error";
		}
		$stmt->close();
	}






	###########################################################################################################   aqui trmina #######################################
	################################################################################

	
}
?>