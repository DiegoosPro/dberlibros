<?php

class ControladorLibros{



	static public function ctrIngresarUsuario(){


		if (isset($_POST["ingresoUsuario"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoUsuario"])){

				$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$tabla = "tab_usuarios";

			$item = "usuario";
			$valor = $_POST['ingresoUsuario'];

			$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);


			if ($respuesta["usuario"] == $_POST["ingresoUsuario"] && $respuesta["password"] == $encriptar) {

				$_SESSION['iniciarSesion'] = "ok";

				$_SESSION["id"] = $respuesta["id"];
				$_SESSION["nombre"] = $respuesta["nombre"];
				$_SESSION["usuario"] = $respuesta["usuario"];
				$_SESSION["perfil"] = $respuesta["perfil"];


				echo '<script>

				window.location = "index.php";


				</script>';

				
			}else{


				echo '<br><div class="alert alert-danger">Error al ingresar, vuelvo a intentarlo</div>';



			}







				
			}

			
		}


	}



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





	static public function ctrEditarUsuarios(){

		if (isset($_POST['editarLibro'])) {

			$tabla = "tab_usuarios";

			


			$datos =  array('titulo' => $_POST['titulo'],
						    'autor' => $_POST['autor'],
						    'genero' => $_POST['genero'],
						    'anio_publicacion' => $_POST['anio_publicacion'],
						    'disponibilidad' => $_POST['disponibilidad'],
						    'stock' => $_POST['stock']);



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

									window.location = "usuarios";

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

									window.location = "usuarios";

									}
								})

					</script>';



			}


			
		}


	}


	static public function ctrBorrarUsuarios(){


		if (isset($_GET["idUsuario"])) {

			$tabla = "tab_usuarios";
			$datos = $_GET['idUsuario'];


			$respuesta = ModeloUsuarios::mdlBorrarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {


			echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "usuarios";

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

									window.location = "usuarios";

									}
								})

					</script>';



			}




			
		}


	}


	


}