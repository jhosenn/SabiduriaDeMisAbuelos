<?php 
    
    $id = $_GET["idcita"];
    // LLAME LA CONEXION
    // REALICE LA CONSULTA DE LA TABLA CITA CON EL ID OBTENIDO ARRIBA
    // UNA VEZ TRAIGA EL REGISTRO SE ENCARGA DE MOSTRAR LOS VALORES EN LOS CAMPOS
     $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                          die("Problemas con la conexión");

                      $modificar=mysqli_query($conexion,"select * from agendarcita WHERE idcita=$id  ") or
                        die("Problemas en el select:".mysqli_error($conexion));

                $reg=mysqli_fetch_object($modificar);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Agendar Cita</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php 
    include dirname(__DIR__, 2) . '/vista/modulos/menu_administrador.php';
     ?>

    
    <br><br>
    <div class="container bg-light"><br>
         <form method="POST" action="../../controlador/Cita/modificar.cita.php">
            
            <div class="card">
                    <div class="card-header bg-purple">
                        <div class="text-center text-light">
                            <h1>Modificar Cita</h1>
                        </div>
                       
                    </div>
            </div>
            <input type="hidden" name="idcita" value="<?php echo $reg->idcita; ?>">
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Nombre y apellido</label>
                                        
                                        <select name="nombreyapellido" id="nombreyapellido" class="form-control">
                                            <?php
                                                $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos");
                                                $registros=mysqli_query($conexion,"select * from usuario");
                                                while($row = mysqli_fetch_object($registros)){
                                                    if($reg->nombreyapellido == $row->nombrecompleto){
                                                        echo '<option value="' . $row->nombrecompleto . '" selected>' . $row->nombrecompleto . '</option>';    
                                                    }else{
                                                        echo '<option value="' . $row->nombrecompleto . '">' . $row->nombrecompleto . '</option>';
                                                    }
                                                    
                                                }
                                            ?>
                                        </select>
                                </div>
                        </div>
                </div>
                
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Número de documento</label>
                                        <input type="text" name="numerodocumento" id="numerodocumento" class="form-control" value="<?php echo $reg->numerodocumento; ?>">
                                </div>
                        </div>
                </div>
                
              
                
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Fecha y hora de la cita</label>
                                        <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" value="<?php echo $reg->fecha_hora; ?>">
                                </div>
                        </div>
                </div>
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Dirección</label>
                                        <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $reg->direccion; ?>">
                                </div>
                        </div>
                </div>


                

                
             <div class="card-body">
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Asunto</label><br>
                                        <textarea name="asunto" cols="125" rows="3" placeholder="De que "><?php echo $reg->asunto; ?>
                                        </textarea>
                                </div>
                        </div>
            </div>
                
               
                
            <div class="card-footer bg-purple">
                        <div class="text-center ">
                                <div class="btn-group">
                                        <input type="submit" name="Guardar" value="Guardar" class="btn btn-light">
                                        &nbsp; 
                                        <input type="reset" name="Limpiar" value="Limpiar" class="btn btn-light">
                                </div>

                       </div>
            </div><br>

        </form>           
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>