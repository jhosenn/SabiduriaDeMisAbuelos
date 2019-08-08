
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>
<body>
  <?php
      include '../modulos/menu.php';

    ?>
<br><br>
    <div class="container">
       
            <div class="card">
                  <div class="card-header bg-info">
                      <div class="row">
                          <div class="col">
                               <div class="text-center ">
                              <h4>Listado de la Cita</h4>
                            </div>
                          </div>
                      </div>
                  </div>
                    <?php
                      $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                          die("Problemas con la conexión");

                      $registros=mysqli_query($conexion,"select * 
                                              from agendarcita ") or
                        die("Problemas en el select:".mysqli_error($conexion));

                      while ($reg=mysqli_fetch_array($registros))
                      {
                        echo " El Nombre es:   ".$reg['nombreyapellido']."<br>";
                        echo " La Fecha y Hora de la Cita es:  ".$reg['fecha_hora']."<br>";
                        echo " La Dirrecion de la EPS es:  ".$reg['direccion']."<br>";
                        echo " El Asunto de la Cita es:  ".$reg['asunto']."<br>";
                         echo "<hr style='border-color:info;'>";

                       
                        }


                      mysqli_close($conexion);

                      echo'<a class="btn btn-default btn-light bg-info"  href="../registro.html" role="button">Volver al inicio</a>';

                    ?>
            </div>    
      
  </div>    
  
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>     
</body>
</html>