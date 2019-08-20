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
  <a class="navbar-brand text-light" href="#">Sabiduría de mis abuelos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="../cita/from_usuario.php"><strong>Registro Usuario</strong></a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle nav-link text-light" data-toggle="dropdown" aria-expanded="false" href="#">
        <strong>Consultar Usuario</strong></a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" role="presentation" href="../consultas/consultaGeneral.php">General</a>
          <a class="dropdown-item" role="presentation" href="../cita/frombuscar.php">Especifica</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="../cita/agendar cita.php"><strong>Agendar Cita</strong></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-light" data-toggle="dropdown" aria-expanded="false" href="#">
          <strong>Consultar Citas</strong>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li class="dropdown-item" role="presentation" href="../consultas/consultaGeneralCita.php">General</li>
          <div class="dropdown-divider"></div>
          <li class="dropdown-item" role="presentation" href="../cita/frombuscarCita.php">Especifica</li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="../cita/from_medicacion.php"><strong>Medicacion</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="../cita/from_registromedicamento.php"><strong>Registro de medicamento</strong></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-light" data-toggle="dropdown" aria-expanded="false" href="#">
          <strong>Cambiar Chiquilin</strong>
        </a>
        <div class="dropdown-menu" role="menu">
          <a class="dropdown-item" role="presentation" href="../consultas/consultaGeneralCita.php">General</a>
          <a class="dropdown-item" role="presentation" href="../cita/frombuscarCita.php">Especifica</a>
        </div>
      </li>
      <li class="nav-item">
        <a href="../cerrar_session.php" class="btn nav-link text-light" role="button"><strong>Cerrar Sesión</strong></a>
      </li>
    </ul>
  </div>
</nav>