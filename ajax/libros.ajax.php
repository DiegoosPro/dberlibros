<?php

require_once '../controladores/libroscontrolador.php';
require_once '../modelos/librosmodelo.php';


class AjaxLibros{

	public $idLibro;

	public function AjaxEditarLibros(){


		$item = "id_libros";
		$valor = $this->idLibro;


		$respuesta = ControladorLibros::ctrMostrarLibros($item,$valor);

		echo json_encode($respuesta);


	}


}



if (isset($_POST["idLibro"])) {
    $editar =  new AjaxLibros();
    $editar->idLibro = $_POST['idLibro']; // Cambio de idLibro a idLibros para que coincida con la propiedad en la clase AjaxLibros
    $editar->AjaxEditarLibros();
}
