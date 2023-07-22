<?php

require_once 'conexion.php';


class ModeloLibros{


	static public function mdlGuardarLibros($tabla, $datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(titulo, autor, genero, anio_publicacion, disponibilidad, stock) VALUES(:titulo, :autor, :genero, :anio_publicacion, :disponibilidad, :stock)");

    $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":autor", $datos["autor"], PDO::PARAM_STR);
    $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
    $stmt->bindParam(":anio_publicacion", $datos["anio_publicacion"], PDO::PARAM_STR);
    $stmt->bindParam(":disponibilidad", $datos["disponibilidad"], PDO::PARAM_INT);
    $stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);




		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}




	//mostrar Libros

	static public function mdlMostrarLibros($tabla,$item,$valor){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt->fetch();



			
		}else{


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt->fetchAll();



		}


	}



	static public function mdlEditarUsuarios($tabla,$datos){


	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, usuario = :usuario, password = :password, perfil = :perfil WHERE id_usuarios = :id_usuarios");

		$stmt->bindParam(":id_usuarios", $datos["id_usuarios"], PDO::PARAM_INT);

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		


		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}


	static public function mdlBorrarUsuarios($tabla,$datos){



		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla  WHERE id_usuarios = :id_usuarios");

		$stmt->bindParam(":id_usuarios", $datos, PDO::PARAM_INT);

	

		if ($stmt->execute()) {
			
			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt->null;


	}







	}



