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



static public function ctrCrearUsuarios(){

		if (isset($_POST['usuario'])) {

			$tabla = "tab_usuarios";

			$encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$datos =  array('nombre' => $_POST['nombre'],
						    'usuario' => $_POST['usuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['perfil']);
							


			


			$respuesta = ModeloUsuarios::mdlGuardarUsuarios($tabla,$datos);


			if ($respuesta == "ok") {


				echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido registrado correctamente",
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
						  title: "El usuario  no pudo ser registrado",
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

	static public function ctrEditarUsuarios(){

		if (isset($_POST['editarUsuario'])) {

			$tabla = "tab_usuarios";

			$encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG');


			$datos =  array('id' => $_POST['id'],
							'nombre' => $_POST['editarNombre'],
						    'usuario' => $_POST['editarUsuario'],
						    'password' => $encriptar,
						    'perfil' => $_POST['editarPerfil']);


			//print_r($datos);


			


		$respuesta = ModeloUsuarios::mdlEditarUsuarios($tabla,$datos);


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

}








 ?>