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
  include '../../vista/modulos/menu_administrador.php';
  ?>


  <br><br>
  <div class="container bg-light"><br>

    <div class="card">
      <div class="card-header bg-purple">
        <div class="row">
          <div class="col">
           <div class="text-center text-white ">
            <h1>Listado De Los Usuarios</h1>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped text-white">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Tipo de documento</th>
              <th>Género</th>
              <th>N° Identificación</th>
              <th>Edad</th>
              <th>RH</th>
              <th>Eps</th>
              <th>Área Protejida</th>
              <th>Fecha Nacimiento</th>
              <th>Origen</th>
              <th>Estado Civil</th>
              <th>Fecha de ingreso</th>
              <th>Estrato</th>
              <th>Escolaridad</th>
              <th>Diagnóstico</th>
              <th>Acudiente</th>
              <th>Teléfono acudiente</th>
              <th>Parentesco</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
            die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select * 
              from usuario ") or
            die("Problemas en el select:".mysqli_error($conexion));

            while ($reg=mysqli_fetch_array($registros))
            {
              echo "<tr>";
              echo "<td>".$reg['nombrecompleto']."</td>";
              echo "<td>".$reg['tipodocumento']."</td>";
              echo "<td>". ($reg['sexo'] == "M" ? "Masculino" : "Femenino") ."</td>";
              echo "<td>".$reg['numerodocumento']."</td>";
              echo "<td>".$reg['edad']."</td>";
              echo "<td>".$reg['rh']."</td>";
              echo "<td>".$reg['eps']."</td>";
              echo "<td>".$reg['areaprotegida']."</td>";
              echo "<td>".$reg['fechanacimiento']."</td>";
              echo "<td>".$reg['origen']."</td>";
              echo "<td>".$reg['estadocivil']."</td>";
              echo "<td>".$reg['fechaingreso']."</td>";
              echo "<td>".$reg['estrato']."</td>";
              echo "<td>".$reg['escolaridad']."</td>";
              echo "<td>".$reg['diagnostico']."</td>";
              echo "<td>".$reg['nombreyapellido']."</td>";
              echo "<td>".$reg['telefono']."</td>";
              echo "<td>".$reg['parentesco']."</td>";
              echo "
                <td>
                  <div class='btn-group'>
                   <a href='#'> <button class='btn btn-warning'>Modificar</button></a>
                   <a href='#'> <button class='btn btn-danger'>Eliminar</button></a>
                  </div>
                </td>
              ";
              echo "</tr>";
            }


            mysqli_close($conexion);


            echo'<a class="btn btn-default bg-light" href="../../vista/inicio.php" role="button">Volver al inicio</a>';

            ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div> <br>        

  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>