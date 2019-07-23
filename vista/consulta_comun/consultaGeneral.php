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
    <!-- <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-black" href="index.html"><strong>SABIDURIA DE MIS ABUELOS </strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Usuario</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">General</a><a class="dropdown-item" role="presentation" href="../consulta_comun/fromBuscarComun.php">Especifica</a></div>
                       
                    </li>
                </ul>

                

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Citas</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../consulta_comun/consultaGeneralCita.php">General</a><a class="dropdown-item" role="presentation" href="../consulta_comun/fromBuscarCitaComun.php">Especifica</a></div>
                       
                    </li>
                </ul>



                <ul class="nav navbar-nav">
                     <div class="">
                         <a href="../../index.html" class="btn text-black " role="button"><strong>Volver Al Menu</strong></a>
                     </div>
                </ul>

            </div>

        </div>
    </nav> -->
      <div class="container">
       
            <div class="card">
                  <div class="card-header bg-success">
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
                      echo"<hr>";
                     
                      }


                    mysqli_close($conexion);


                    echo'<a class="btn btn-default btn-light bg-success" href="../registro.html" role="button">Volver al inicio</a>';

              ?>
       </div>
       
   </div>      
   
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>