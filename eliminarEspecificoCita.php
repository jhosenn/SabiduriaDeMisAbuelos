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
		$conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
		    die("Problemas con la conexión");

		$registros=mysqli_query($conexion, "select numerodocumento from agendarcita
		                        where numerodocumento='$_POST[datobuscar]'") or
		  die("Problemas en el select:".mysqli_error($conexion));
		if ($reg=mysqli_fetch_array($registros))
		{
		  mysqli_query($conexion,"delete from agendarcita where numerodocumento='$_POST[datobuscar]'") or
		    die("Problemas en el select:".mysqli_error($conexion));
		   
		  echo'<script>
				alert ("EL Usuario Fue Eliminado");
				window.history.go(-1);
				</script>;';
		}
		else
		{
		  echo'<script>
				alert ("Este Usuario No Existe");
				window.history.go(-1);
				</script>;';
		}
		mysqli_close($conexion);
  ?>

</body>	
</html>
