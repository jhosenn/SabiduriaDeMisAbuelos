<?php 
 require 'conexion.php';

 class login{
 	public function IniciarSesion($usuario,$contrasena){
 		$sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "'";
 		$conexion = new Conexion();
 		$stmt = $conexion->prepare($sql);
 		$stmt->execute();
 		$obj_usuario = $stmt->fetch(PDO::FETCH_OBJ);

 		if (!$obj_usuario) {
 			return "El Usuario No Existe";
 		} else{
 			$contrasena = md5($contrasena);
 			if ($obj_usuario->contrasena !== $contrasena) {
               return "La Contraseña Ingresada No Coincide";
 			}

 			session_start();
 			$_SESSION["idUsuario"] = $obj_usuario->idUsuario;
 			$_SESSION["usuario"] = $obj_usuario->usuario;
 			return "OK";
 		}

 	}
 }












 ?>