<!DOCTYPE html>
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
  



		<div class="container"><br><br>
			<form method="POST" action="../consultas/consultaEspecifica.php">
					<div class="card">
                    <div class="card-header bg-purple "  >
                        <div class="text-center">
                            <h1>Formulario Buscar Usuario</h1>
                        </div>
                        <a class="btn btn-default btn-light" href="../inicio.html" role="button">Volver al inicio</a>
                    </div>
            </div>
                <div class="card-body bg-light">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Ingresar Numero de Documento:</label>
                                        <input type="text" name="datobuscar" id="datobuscar" class="form-control">
                                </div>
                        </div>
                </div>
                <div class="card-footer bg-purple">
                        <div class="text-center ">
                                <div class="btn-group">
                                        <input type="submit" name="Buscar" value="Buscar" class="btn btn-light">
                                        &nbsp; 
                                        <input type="reset" name="Limpiar" value="Limpiar" class="btn btn-light">
                                </div>

                       </div>
            </div>


		     </form>				



		</div>

</body>
</html>