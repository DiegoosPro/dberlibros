<?php 

/**
 * 
 */
class ControladorUsuarios
{
	//mostar usuarios
	 static public function ctrMostrarUsuarios($item,$valor)
	{
		$tabla = "tab_usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);
		return $respuesta;
	}
}
 ?>