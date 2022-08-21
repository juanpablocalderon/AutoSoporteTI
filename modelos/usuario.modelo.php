<?php 

require_once "conexion.php";

class ModeloUsuarios{


	static public function mdlMostrarUsuarios($tabla, $item, $valor){


		$stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WhERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();


	}
}





