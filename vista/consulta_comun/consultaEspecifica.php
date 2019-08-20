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
  include '../modulos/menu.php';
  ?>


  
  <div class="container"><br><br>

    <div class="card">
      <div class="card-header bg-info">
        <div class="row">
          <div class="col">
           <div class="text-center ">
            <h4>Listado de los Usuarios</h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped text-white">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Género</th>
              <th>Edad</th>
              <th>RH</th>
              <th>EPS</th>
              <th>Area Protejida</th>
              <th>Fecha Nacimiento</th>
              <th>Diagnostico</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
           $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                    die("Problemas con la conexión");

                $registros=mysqli_query($conexion,"select * 
                                        from usuario where nombrecompleto ='$_POST[datobuscar]'") or
                  die("Problemas en el select:".mysqli_error($conexion));

                if ($reg=mysqli_fetch_array($registros))
            {
              echo "<tr>";
              echo "<td>".$reg['nombrecompleto']."</td>";
              echo "<td>". ($reg['sexo'] == "M" ? "Masculino" : "Femenino") ."</td>";
              echo "<td>".$reg['edad']."</td>";
              echo "<td>".$reg['rh']."</td>";
              echo "<td>".$reg['eps']."</td>";
              echo "<td>".$reg['areaprotegida']."</td>";
              echo "<td>".$reg['fechanacimiento']."</td>";
              echo "<td>".$reg['diagnostico']."</td>";
              
              echo "</tr>";
            }
            else
                {
                  echo'<script>
                alert ("Este Usuario no Existe");
                window.history.go(-1);
                </script>;';
                }


            mysqli_close($conexion);


            echo'<a class="btn btn-default btn-light bg-purple" href="../registro.html" role="button">Volver al inicio</a>';

            ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>         

  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>