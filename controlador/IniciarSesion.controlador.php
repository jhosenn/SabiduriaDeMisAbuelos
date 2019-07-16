<?php 
 require_once '../modelo/IniciarSesion.modelo.php';

 if ($_POST) {
 	$usuario = $_POST["usuario"];
 	$contrasena = $_POST["contrasena"];

 	if ($usuario == "") {
 		echo json_encode("Debe Ingresar el Usuario");
 		return;
 	}
 	if ($contrasena == "") {
 		echo json_encode("Debe Ingresar la Contraseña");
 		return;
 	}

 	$modelo = new login();
 	$respuesta = $modelo->IniciarSesion($usuario,$contrasena);
 	echo json_encode($respuesta);
 } else{
 	echo json_encode("No ha enviado datos desde el formulario");
 	return;
 }


 ?>