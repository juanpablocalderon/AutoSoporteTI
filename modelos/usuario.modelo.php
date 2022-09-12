<?php 

require_once "conexion.php";

class ModeloUsuarios{


	static public function mdlMostrarUsuarios($tabla, $item, $valor){


		$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WhERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> closed();

		$stmt = null;


	}


	 /*--===========================================
                  =REGISTRO DE USUARIO
     ============================================--*/


    static public function mdlIngresarUsuarios($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil :foto)");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		$stmt -> bindParam(":usuario", $datos["nombre"], PDO::PARAM_STR);

		$stmt -> bindParam(":password", $datos["nombre"], PDO::PARAM_STR);

		$stmt -> bindParam(":perfil", $datos["nombre"], PDO::PARAM_STR);

		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt -> execute()){


			return "ok";

		}else{


			return "error";


		}

				
		$stmt -> closed();

		$stmt = null;


	}
 








}





