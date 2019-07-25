
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>
<body>
  <?php 
  include '../modulos/menu_administrador.php';
   ?>
<!-- <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-black" href="index.html"><strong>SABIDURIA DE MIS ABUELOS </strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <a href="../cita/from_usuario.php" class=" btn text-black" role="button"><strong>Registro Usuario</strong></a>
                        
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Usuario</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../consultas/consultaGeneral.php">General</a><a class="dropdown-item" role="presentation" href="../cita/frombuscar.php">Especifica</a></div>
                       
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                   <a class="btn text-black" href="../cita/agendar cita.php" role="button"><strong>Agendar Cita</strong></a>
                        
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Citas</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">General</a><a class="dropdown-item" role="presentation" href="../cita/frombuscarCita.php">Especifica</a></div>
                       
                    </li>
                </ul>



                <ul class="nav navbar-nav">
                     <div class="">
                         <a href="../..index.html" class="btn text-black " role="button"><strong>Cerrar Sesión</strong></a>
                     </div>
                </ul>

            </div>

        </div>
    </nav>-->
  


    <div class="container"><br><br>
       
            <div class="card">
                  <div class="card-header bg-purple">
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
                        echo " El Numero de Documento es:  ".$reg['numerodocumento']."<br>";
                        echo " La Fecha y Hora de la Cita es:  ".$reg['fecha_hora']."<br>";
                        echo " La Dirrecion de la EPS es:  ".$reg['direccion']."<br>";
                        echo " El Asunto de la Cita es:  ".$reg['asunto']."<br>";
                        echo "<hr>";

                       
                        }


                      mysqli_close($conexion);

                      echo'<a class="btn btn-default btn-light bg-purple"  href="../inicio.html" role="button">Volver al inicio</a>';

                    ?>
            </div>    
      
  </div>         
</body>
</html>