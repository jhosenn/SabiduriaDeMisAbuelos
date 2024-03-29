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
            <h1>Listado De Medicamento</h1>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped text-white">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>  
              <th>Estado</th>
             <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
            die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select * 
              from medicamento ") or
            die("Problemas en el select:".mysqli_error($conexion));
                while ($reg=mysqli_fetch_array($registros))
            {
              echo "<tr>";
              echo "<td>".$reg['nombre']."</td>";
              echo "<td>".$reg['descripcion']."</td>";
              echo "<td>". ($reg['estado'] == "1" ? "Activo" : "Inactivo")."</td>";
         
              echo "
                <td>
                  <div class='btn-group'>
                  <a href='eliminar.medicamento.php?idmedicamento=" . $reg['idmedicamento'] . "'>  <button class='btn btn-danger'>Eliminar</button></a>
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
  </div>    <br>     

  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>