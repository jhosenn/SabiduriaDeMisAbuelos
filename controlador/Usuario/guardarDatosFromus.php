<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body>


<?php 

$conexion = mysqli_connect("localhost","root","","sabiduriademisabuelos")or die("Problema con la conexion");



$verificar_numerodocumento =  mysqli_query($conexion,"SELECT * FROM usuario WHERE numerodocumento = '$_POST[var_doc]'");
if(mysqli_num_rows($verificar_numerodocumento) > 0){
	echo'<script>
	alert ("El usuario ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}




mysqli_query($conexion," INSERT INTO usuario(nombrecompleto, tipodocumento, sexo, numerodocumento, edad, rh, eps, areaprotegida, fechanacimiento, origen, estadocivil, fechaingreso, estrato, escolaridad, diagnostico,  nombreyapellido, telefono, parentesco)
	values('$_POST[nombre]',
	'$_POST[ti_doc]',
	'$_POST[sexo]',
	'$_POST[var_doc]',
	'$_POST[var_edad]',
	'$_POST[var_rh]',
	'$_POST[var_eps]',
	'$_POST[a_proteg]',
	'$_POST[fec_nac]',
	'$_POST[var_orig]',
	'$_POST[es_civ]',
	'$_POST[hf_ing]',
	'$_POST[estrato]',
	'$_POST[var_esc]',
	'$_POST[diagnostico]',
	'$_POST[nombre_apellido]',
	'$_POST[var_tel]',
	'$_POST[var_par]')") or die("problemas en el select".mysqli_error($conexion));

	mysqli_close($conexion);

	
	echo'<script>
	alert ("usuario registrado");
	window.history.go(-1);
	</script>';



 ?>
 </body>
</html>