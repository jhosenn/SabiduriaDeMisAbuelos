<?php
session_start();

if(isset($_SESSION) && count($_SESSION) <= 0){
  echo "<script>window.location='../index.html';</script>";
}
?>

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
    
     <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"  id="bootstrap-css">

</head>


<body>







            <nav class="navbar navbar-light navbar-expand-lg mainmenu bg-purple">
                 <a class="navbar-brand text-light" href="#">Sabiduría de mis abuelos</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class=""><a class="nav-link text-light" href="../vista/cita/from_usuario.php">Registro Usuario <span class="sr-only">(current)</span></a></li>
                        <li><a class="nav-link text-light" href="../vista/cita/agendar cita.php">Agendar Cita</a></li>
                        <li><a class="nav-link text-light" href="../vista/cita/from_medicacion.php">Medicacion</a></li>
                        <li><a class="nav-link text-light" href="../vista/cita/from_registromedicamento.php">Registro de medicamento</a></li>




                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultas</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
                               
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a  href="../vista/consultas/consultaGeneral.php">General</a></li>
                                        <li><a  href="../vista/cita/frombuscar.php">Especifica</a></li>
                                    </ul>
                                
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cita</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a  href="../vista/consultas/consultaGeneralCita.php">General</a></li>
                                <li><a href="../vista/cita/frombuscarCita.php">Especifica</a></li>
                                
                                
                                </ul>
                            </li>
                           
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medicacion</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" role="presentation" href="../vista/consultas/consultaGeneralMedicacion.php">General</a></li>
                                <li><a class="dropdown-item" role="presentation" href="../vista/cita/frombuscarMedicacion.php">Especifica</a></li>
                              
                                
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="../vista/cerrar_session.php" class="btn nav-link text-light" role="button">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </nav>
 <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
