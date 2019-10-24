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



$sql = "INSERT INTO formula(idusuario,idmedicamento,cantidad,frecuencia,observacion)
values(" . $_POST['idusuario'] . "," . $_POST['idmedicamento'] . ",'" . $_POST['cantidad'] . "','$_POST[frecuencia]','$_POST[observacion]')";

mysqli_query($conexion,$sql) or die("problemas en el select".mysqli_error($conexion));

	mysqli_close($conexion);

	

echo'<script>
	alert ("La medicacion fue registrada");
	window.history.go(-1);
</script>';
 ?>

 </body>
</html>