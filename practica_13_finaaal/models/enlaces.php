<?php 
	class Paginas
	{
		//Metodo para relacionar las paginas dependiendo del action que se coloque redirecciona a sia la pagina que es
		public static function enlacesPaginasModel($enlaces)
		{
			if( $enlaces == "salir" || $enlaces == "dashboard" || $enlaces=="vista_jugadores" || $enlaces=="agregar_libros" || $enlaces=="editar_libro" || $enlaces=="editar_usuario" || $enlaces=="agregar_usuario" || $enlaces=="editar_pass"
				|| $enlaces=="agregar_deporte" || $enlaces=="editar_deporte" || $enlaces=="vista_deportes" || $enlaces=="agregar_equipo" || $enlaces=="vista_equipos"|| $enlaces=="editar_equipo" || $enlaces=="agregar_jugador"|| $enlaces=="equipos_jugador" || $enlaces=="editar_jugador" || $enlaces=="vista_usuarios")
			{
				$module =  "views/modules/".$enlaces.".php";
			}
		    else if($enlaces == "index")
		    {
		    	$module =  "views/modules/ingresar.php";	
		    }
			return $module;
		}
	}
?>