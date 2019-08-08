function IniciarSesion() {
 var usuario = document.getElementById('username').value;
 var contrasena = document.getElementById('Contrasena1').value;

 if (usuario == "") {
 	alert('Debe Ingresar Usuario');
 }

if (contrasena == "") {
 	alert('Debe Ingresar Una Contraseña');
 }

var datos = {
	"usuario" : usuario,
	"contrasena" : contrasena
};

 $.ajax({
 	url: '../../controlador/IniciarSesion.controlador.php',
 	data : datos,
 	type: 'POST',
 	dataType: 'json'
 }).done(function (data) {
 	if (data == "OK") {
 		alert('Sesion Iniciada');
 		window.location = '../inicio.php';
 	}else{
 		alert(data);
 	}

 }).fail(function(data){
 	console.log(data);
 });

}