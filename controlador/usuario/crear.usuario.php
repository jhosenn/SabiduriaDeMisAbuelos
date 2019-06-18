<?php

	if($_POST){
		// traemos todos los campos
		$usuario = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordconfirm = $_POST['passwordconfirm'];

		// validar los campos
		if($usuario == ""){
			// devuelve un mensaje
			return"Por favor escriba su nombre de usiaro":
		}

		if($password != $passwordconfirm){
			// devuelve mensaje que las contraseñas no coinciden
			return"La contraseñas no coinciden";
		}

		if ($email == "") {
			//devolver un mensaje 
			return"por favor ingrese su email";
		}




	}

?>