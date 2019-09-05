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


  <br><br>
  <div class="container bg-light"><br>

    <div class="card">
      <div class="card-header bg-purple">
        <div class="row">
          <div class="col">
           <div class="text-center text-white ">
            <h1>Listado De Medicaciones</h1>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped text-white">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Medicamento</th>
              <th>Cantidad</th>
              <th>Frecuencia</th>
              <th>Descripcion</th>
             <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                    die("Problemas con la conexión");

                $registros=mysqli_query($conexion,"select * 
                                        from formula where idusuario ='$_POST[datobuscar]'") or
                  die("Problemas en el select:".mysqli_error($conexion));

                if ($reg=mysqli_fetch_array($registros))
            {
              echo "<tr>";
              echo "<td>".$reg['idusuario']."</td>";
              echo "<td>".$reg['idmedicamento']."</td>";
              echo "<td>".$reg['cantidad']."</td>";
              echo "<td>".$reg['frecuencia']."</td>";
              echo "<td>".$reg['observacion']."</td>";
             
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
            else
                {
                  echo'<script>
                alert ("Esta Medicacion no Existe");
                window.history.go(-1);
                </script>;';
                }


            mysqli_close($conexion);


            echo'<a class="btn btn-default bg-light" href="../inicio.php" role="button">Volver al inicio</a>';

            ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>     <br>    

  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>