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
    include '../modulos/menu_administrador.php';
     ?>

    
    <br><br>
    <div class="container bg-light"><br>
         <form method="POST" action="guardarDatosFromcita.php">
            
            <div class="card">
                    <div class="card-header bg-purple">
                        <div class="text-center">
                            <h1>Agendar Cita</h1>
                        </div>
                        <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                    </div>
            </div>
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Nombre Y Apellido:</label>
                                        <input type="text" name="nom_apell" id="nom_apell" class="form-control">
                                </div>
                        </div>
                </div>
                
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Numero de documento:</label>
                                        <input type="text" name="num_doc" id="num_doc" class="form-control">
                                </div>
                        </div>
                </div>
                
              
                
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Fecha y Hora De La Cita:</label>
                                        <input type="datetime-local" name="hf_reg_for" id="hf_reg_for" class="form-control">
                                </div>
                        </div>
                </div>
                <div class="card-body">
                        <div class="row">
                                <div class="col-md-10">
                                        <label>Direccion:</label>
                                        <input type="text" name="dire" id="dire" class="form-control">
                                </div>
                        </div>
                </div>


                

                
             <div class="card-body">
                        <div class="row">
                                <div class="col-md-4">
                                        <label>Asunto:</label><br>
                                        <textarea name="asunto" cols="125" rows="3" placeholder="De que " >
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
            </div>

        </form>           
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>