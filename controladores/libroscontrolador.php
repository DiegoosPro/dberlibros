<?php

class ControladorLibros{


	static public function ctrCrearLibros(){

		if (isset($_POST['titulo'])) {

			$tabla = "tab_libros";


			$datos =  array('titulo' => $_POST['titulo'],
						    'autor' => $_POST['autor'],
						    'genero' => $_POST['genero'],
						    'anio_publicacion' => $_POST['anio_publicacion'],
                			'disponibilidad' => isset($_POST['disponibilidad']) ? 1 : 0, // 1 si está marcado, 0 si no está marcado
						    'stock' => $_POST['stock']);


			


			$respuesta = ModeloLibros::mdlGuardarLibros($tabla,$datos);


			if ($respuesta == "ok") {


				echo'<script>

					swal({
						  type: "success",
						  title: "El Libro ha sido registrado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El Libro  no pudo ser registrado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';



			}


			
		}


	}







	//mostrar libros

	static public function ctrMostrarLibros($item,$valor){

		$tabla = "tab_libros";

		$respuesta = ModeloLibros::mdlMostrarLibros($tabla,$item,$valor);

		return $respuesta;


	}





	static public function ctrEditarLibros(){

		if (isset($_POST['editarTitulo'])) {

			$tabla = "tab_libros";


			$datos =  array('id_libros' => $_POST['id_libros'],
							'titulo' => $_POST['editarTitulo'],
						    'autor' => $_POST['editarAutor'],
						    'genero' => $_POST['editarGenero'],
						    'anio_publicacion' => $_POST['editarAnio_publicacion'],
                			'disponibilidad' => isset($_POST['editarDisponibilidad']) ? 1 : 0, // 1 si está marcado, 0 si no está marcado
						    'stock' => $_POST['editarStock']);



			//print_r($datos);


			


		$respuesta = ModeloLibros::mdlEditarLibros($tabla,$datos);


			if ($respuesta == "ok") {




				echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido Modificado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El usuario  no ha sido modificado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';



			}


			
		}


	}


	
static public function ctrBorrarLibros(){


		if (isset($_GET["idLibro"])) {

			$tabla = "tab_libros";
			$datos = $_GET['idLibro'];

			$respuesta = ModeloLibros::mdlBorrarLibros($tabla,$datos);


			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "El usuario ha sido eliminado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "libros";

									}
								})

					</script>';



			}




			
		}


	}


	


}

	


