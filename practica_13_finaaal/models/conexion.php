<?php
//clasepara crear un objeto de tipo conexion a la base de datos
class Conexion
{
	public static function conectar()
	{
		//Declarando los parametros como nombre de la base y usuario y contraseña de la bd
		$link = new PDO("mysql:host=localhost;dbname=equipos_deportivos_2","root","");
		return $link;
	}
}
?>
