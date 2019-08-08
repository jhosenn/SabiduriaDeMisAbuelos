<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">

</head>
<body>
    <?php
      include '../modulos/menu.php';

    ?>
  
      <div class="container"><br><br>
       
            <div class="card">
                  <div class="card-header bg-info">
                      <div class="row">
                          <div class="col">
                               <div class="text-center ">
                              <h4>Listado de los Usuarios</h4>
                            </div>
                          </div>
                      </div>
                  </div>
              <?php
                    $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                        die("Problemas con la conexión");

                    $registros=mysqli_query($conexion,"select * 
                                            from usuario ") or
                      die("Problemas en el select:".mysqli_error($conexion));

                    while ($reg=mysqli_fetch_array($registros))
                    {
                      echo " El Nombre es:  ".$reg['nombrecompleto']."<br>";
                      echo " El Sexo es:  ".$reg['sexo']."<br>";
                      echo " La Edad es:  ".$reg['edad']."<br>";
                      echo " El RH es:  ".$reg['rh']."<br>";
                      echo " La EPS es:  ".$reg['eps']."<br>";
                      echo " El Area Protegida es:  ".$reg['areaprotegida']."<br>";
                      echo " La Fecha de Nacimiento es:  ".$reg['fechanacimiento']."<br>";
                      echo " El Diagnostico es:  ".$reg['diagnostico']."<br>";
                      echo " El Medicamento es:  ".$reg['medicamento']."<br>";
                      ;
                       echo "<hr style='border-color:info;'>";
                     
                      }


                    mysqli_close($conexion);


                    echo'<a class="btn btn-default btn-light bg-info" href="../registro.html" role="button">Volver al inicio</a>';

              ?>
       </div>
       
   </div>      
   
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>