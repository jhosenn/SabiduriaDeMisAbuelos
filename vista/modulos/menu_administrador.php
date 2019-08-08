<?php
    session_start();

        if(isset($_SESSION) && count($_SESSION) <= 0){
            echo "<script>window.location='../../index.html';</script>";
        }
?>

<style type="text/css">
    body{
        margin: 0;
        padding: 0;
        background: url(../../resources/logo.jpeg) no-repeat center top;
        background-size:cover;
        font-family: sans-serif;
        height: 100vh;
        background-attachment: fixed;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-purple">
    <div class="container-fluid"><a class="navbar-brand text-light" href="index.html"><strong>SABIDURIA DE MIS ABUELOS </strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
        id="navcol-1">
        <ul class="nav navbar-nav">
            <a class="text-light" href="../cita/from_usuario.php"><strong>Registro Usuario</strong></a>

        </ul>

        <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link text-light" data-toggle="dropdown" aria-expanded="false" href="#">
                    <strong>Consultar Usuario</strong>
                </a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="../consultas/consultaGeneral.php">General</a>
                    <a class="dropdown-item" role="presentation" href="../cita/frombuscar.php">Especifica</a>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav">
         <a class="text-light" href="../cita/agendar cita.php"><strong>Agendar Cita</strong></a>

     </li>
 </ul>

 <ul class="nav navbar-nav">
    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-light" data-toggle="dropdown" aria-expanded="false" href="#"><strong>Consultar Citas</strong></a><div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="../consultas/consultaGeneralCita.php">General</a><a class="dropdown-item" role="presentation" href="../cita/frombuscarCita.php">Especifica</a></div>

    </li>
</ul>



<ul class="nav navbar-nav">
   <div class="">
       <a href="../cerrar_session.php" class="btn text-light" role="button"><strong>Cerrar Sesión</strong></a>
   </div>
</ul>

</div>

</div>
</nav>