<?php 
    
    $id = $_GET["idformula"];
    // LLAME LA CONEXION
    // REALICE LA CONSULTA DE LA TABLA CITA CON EL ID OBTENIDO ARRIBA
    // UNA VEZ TRAIGA EL REGISTRO SE ENCARGA DE MOSTRAR LOS VALORES EN LOS CAMPOS
     $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                          die("Problemas con la conexión");

                      $modificar=mysqli_query($conexion,"select * from formula WHERE idformula=$id  ") or
                        die("Problemas en el select:".mysqli_error($conexion));

                $reg=mysqli_fetch_object($modificar);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Sabiduria De Mis Abuelos</title>
  <link rel="stylesheet" href="../../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
  <?php 

  include dirname(__DIR__, 2) . '/vista/modulos/menu_administrador.php';
  require  dirname(__DIR__, 2) . '/modelo/conexion.php';


  ?>
  <br><br>

  <div class="container bg-light"><br>
    <form method="POST" action="../../controlador/Medicacion/modificar.Medicacion.php">
      <div class="card">
        <div class="card-header bg-purple">
          <div class="text-center text-light">
            <h1>Modificacion de Medicación</h1>
          </div>
          <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
        </div>
     </div> 
      <input type="hidden" name="idformula" value="<?php echo $reg->idformula; ?>">   
        <div class="card-body">
          <div class="row">
            <div class="col-md-10">
              <label>Paciente</label>
              <select name="idusuario" id="idusuario" class="form-control">
                <?php
                $conexion = new Conexion();
                $stmt = $conexion->prepare("select * from usuario ");
                $stmt->execute();
                $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $value) {
                  if($reg->idusuario == $row->idusuario){
                                                        echo '<option value="' . $row->idusuario . '" selected>' . $row->idusuario . '</option>';    
                                                    }else{
                                                        echo '<option value="' . $row->idusuario . '" selected>' . $row->idusuario . '</option>';
                                                    };
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <label>Medicamento</label>
              <select name="idmedicamento" id="idmedicamento" class="form-control" value="<?php echo $reg->idmedicamento; ?>" >
                <?php
                $conexion = new Conexion();
                $stmt = $conexion->prepare("select * from medicamento ");
                $stmt->execute();
                $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $value) {
                 if($reg->idmedicamento == $row->idmedicamento){
                                                        echo '<option value="' . $row->idmedicamento . '" selected>' . $row->idmedicamento . '</option>';    
                                                    }else{
                                                        echo '<option value="' . $row->idmedicamento . '">' . $row->idmedicamento . '</option>';
                                                    };
                }
                ?>
              </select>
           
        <div class="row">
          <div class="col-md-5">
            <label>Cantidad</label>
            <input type="text" name="cantidad" id="cantidad" class="form-control" value="<?php echo $reg->cantidad; ?>">
          </div>

          <div class="col-md-5">
            <label>Frecuencia</label>
            <select name="frecuencia" id="frecuencia" class="form-control">
              <option value="Cada 8 horas" <?php
               if($reg->frecuencia == "Cada 8 horas"){echo "selected";}?> >Cada 8 horas</option>
               <option value="Cada 12 horas" <?php
               if($reg->frecuencia == "Cada 12 horas"){echo "selected";}?> >Cada 12 horas</option>
               <option value="Cada 24 horas" <?php
               if($reg->frecuencia == "Cada 24 horas"){echo "selected";}?> >Cada 24 horas</option>
               <option value="Cada 8 dias" <?php
               if($reg->frecuencia == "Cada 8 dias"){echo "selected";}?> >Cada 8 dias</option>
               <option value="Cada 15 dias" <?php
               if($reg->frecuencia == "Cada 15 dias"){echo "selected";}?> >Cada 15 dias</option>
              
            </select>
          </div>
        </div>  




        <div class="row">
         <div class="col-md-5">
          <label>Descripción</label><br>
          <textarea name="observacion" cols="125" rows="3" placeholder="Descripción Especifica "><?php echo $reg->observacion; ?> 
          </textarea>
        </div>

      </div>
      </div>
      
  



       <div class="card-footer bg-purple">
                                            <div class="text-center ">
                                                <div class="btn-group"><br>
                                                    <input type="submit" name="Guardar" value="Guardar" class="btn btn-light"> &nbsp;
                                                    <input type="reset" name="Limpiar" value="Limpiar" class="btn btn-light">
                                                </div>

                                            </div>
                                        </div><br>

    </form>
</div>   

<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
