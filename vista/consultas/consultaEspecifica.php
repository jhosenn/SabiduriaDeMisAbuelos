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
	include '../modulos/menu_administrador.php';
	 ?>

	<!--<nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-black" href="index.html"><strong>SABIDURIA DE MIS ABUELOS </strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <a href="../cita/from_usuario.html" class=" btn text-black" role="button"><strong>Registro Usuario</strong></a>
                        
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Usuario</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../consultas/consultaGeneral.php">General</a><a class="dropdown-item" role="presentation" href="../cita/frombuscar.php">Especifica</a></div>
                       
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                   <a class="btn text-black" href="../cita/agendar cita.html" role="button"><strong>Agendar Cita</strong></a>
                        
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-black" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Citas</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../consultas/consultaGeneralCita.php">General</a><a class="dropdown-item" role="presentation" href="../cita/frombuscarCita.php">Especifica</a></div>
                       
                    </li>
                </ul>



                <ul class="nav navbar-nav">
                     <div class="">
                         <a href="../../index.html" class="btn text-black " role="button"><strong>Cerrar Sesión</strong></a>
                     </div>
                </ul>

            </div>

        </div>
    </nav>-->
	<div class="container">

		
       
            <div class="card">
                  <div class="card-header bg-success">
                      <div class="row">
                          <div class="col">
                               <div class="text-center ">
                              <h4>Listado del Usuario</h4>
                            </div>
                          </div>
                      </div>
                  </div>
					<?php
								$conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
								    die("Problemas con la conexión");

								$registros=mysqli_query($conexion,"select * 
								                        from usuario where numerodocumento ='$_POST[datobuscar]'") or
								  die("Problemas en el select:".mysqli_error($conexion));

								if ($reg=mysqli_fetch_array($registros))
								{
								  echo " El Nombre es:  ".$reg['nombrecompleto']."<br>";
								  echo " El Tipo de Documento es:  ".$reg['tipodocumento']."<br>";
								  echo " El Sexo es:  ".$reg['sexo']."<br>";
								  echo " El Numero de Documento es:  ".$reg['numerodocumento']."<br>";
								  echo " La Edad es:  ".$reg['edad']."<br>";
								  echo " El RH es:  ".$reg['rh']."<br>";
								  echo " La EPS es:  ".$reg['eps']."<br>";
								  echo " El Area Protegida es:  ".$reg['areaprotegida']."<br>";
								  echo " La Fecha de Nacimiento es:  ".$reg['fechanacimiento']."<br>";
								  echo " El Origen es:  ".$reg['origen']."<br>";
								  echo " El Estado Civil es:  ".$reg['estadocivil']."<br>";
								  echo " La Fecha de Ingreso es:  ".$reg['fechaingreso']."<br>";
								  echo " El Estrato es:  ".$reg['estrato']."<br>";
								  echo " La Escolaridad es:  ".$reg['escolaridad']."<br>";
								  echo " El Diagnostico es:  ".$reg['diagnostico']."<br>";
								  echo " El Medicamento es:  ".$reg['medicamento']."<br>";
								  echo " El Nombre del Acudiente es:  ".$reg['nombreyapellido']."<br>";
								  echo " El Telefono del Acudiente es:  ".$reg['telefono']."<br>";
								  echo " El parentesco del Acudiente es:  ".$reg['parentesco']."<br>";
								  
								 
								  }
								
								else
								{
								  echo'<script>
								alert ("Este Usuario no Existe");
								window.history.go(-1);
								</script>;';
								}
								mysqli_close($conexion);
                                
                               
						
					?>


				</div>    
      
  		</div> 
</body>
</html>	