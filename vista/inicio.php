<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            background: url(../resources/logo.jpeg) no-repeat center top;
            background-size:cover;
            font-family: sans-serif;
            height: 100vh;
            background-attachment: fixed;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    
     <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/css/all.min.css">
</head>


<body class="text-white">
    
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand text-white" href="index.html"><strong>SABIDURIA DE MIS ABUELOS </strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <a class="text-white" href="../vista/cita/from_usuario.php"><strong>Registro Usuario</strong></a>
                        
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">
                            <strong>Consultar Usuario</strong>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="../vista/consultas/consultaGeneral.php">General</a>
                            <a class="dropdown-item" role="presentation" href="../vista/cita/frombuscar.php">Especifica</a>
                        </div>
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                   <a class="text-white" href="../vista/cita/agendar cita.php"><strong>Agendar Cita</strong></a>
                        
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Citas</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../vista/consultas/consultaGeneralCita.php">General</a><a class="dropdown-item" role="presentation" href="../vista/cita/frombuscarCita.php">Especifica</a></div>
                       
                    </li>
                </ul>

                 <ul class="nav navbar-nav">
                    <a class="text-light" href="../vista/cita/from_medicacion.php"><strong>Medicacion</strong></a>

                </ul>




                <ul class="nav navbar-nav">
                     <div class="">
                         <a href="cerrar_session.php" class="btn text-white " role="button"><strong>Cerrar Sesión</strong></a>
                     </div>
                </ul>

            </div>

        </div>
    </nav>
    
   <script src="./../assets/js/jquery.min.js"></script>
  <script src="./../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

 