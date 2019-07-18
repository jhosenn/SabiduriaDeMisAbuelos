<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>
<body>
	<div class="container">
       
            <div class="card">
                  <div class="card-header bg-success">
                      <div class="row">
                          <div class="col">
                               <div class="text-center ">
                              <h4>Listado de las Citas</h4>
                            </div>
                          </div>
                      </div>
                  </div>
							<?php
									$conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
									    die("Problemas con la conexión");

									$registros=mysqli_query($conexion,"select * 
									                        from agendarcita where nombrecompletoo ='$_POST[datobuscar]'") or
									  die("Problemas en el select:".mysqli_error($conexion));

									if ($reg=mysqli_fetch_array($registros))
									{
									echo " El Nombre es:  ".$reg['nombreyapellido']."<br>";
								    echo " La Fecha y Hora de la Cita es:  ".$reg['fecha_hora']."<br>";
									echo " La Dirrecion de la EPS es:  ".$reg['direccion']."<br>";
								 	echo " El Asunto de la Cita es:  ".$reg['asunto']."<br>";
									  
									  echo'<a class="btn btn-default btn-light bg-success" href="../consulta_comun/fromBuscarCitaComun.php" role="button">Volver al inicio</a>';
									  
									  }
									
									else
									{
									  echo'<script>
									alert ("No Hay Cita registrada");
									window.history.go(-1);
									</script>;';
									}
									mysqli_close($conexion);

								
							?>
