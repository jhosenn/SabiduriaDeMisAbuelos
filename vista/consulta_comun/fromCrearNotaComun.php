<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS </title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php 
    include '../modulos/menu.php';
     ?>

    
    <br><br>
    <div class="container bg-light"><br>
         <form method="POST" action="../../controlador/Nota/guardarDatosFromnota.php">
            
            <div class="card">
                    <div class="card-header bg-info">
                        <div class="text-center text-light">
                            <h1>CREAR NOTA</h1>
                        </div>
                        <a class="btn btn-default btn-light" href="../registro.html" role="button">Volver al inicio</a>
                    </div>
            </div>
               
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Fecha y hora de la Observacion</label>
                                        <input type="datetime-local" name="fecha_hora" id="fecha_hora" class="form-control" size="20">
                                </div>
                        </div>
                </div>
             

             <div class="card-body">
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Observacion</label><br>
                                        <textarea name="observacion" cols="125" rows="3" placeholder=" " >
                                        </textarea>
                                </div>
                        </div>
            </div>
                
               
                
            <div class="card-footer bg-info">
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