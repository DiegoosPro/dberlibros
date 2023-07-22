<?php

require_once '../controladores/usuarioscontrolador.php';
require_once '../modelos/usuariosmodelo.php';


class AjaxUsuarios{

	public $idUsuario;

	public function AjaxEditarUsuarios(){


		$item = "id_usuarios";
		$valor = $this->idUsuario;


		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

		echo json_encode($respuesta);


	}


}



if (isset($_POST["idUsuario"])) {


	$editar =  new AjaxUsuarios();
	$editar->idUsuario = $_POST['idUsuario'];
	$editar->AjaxEditarUsuarios();


	
}