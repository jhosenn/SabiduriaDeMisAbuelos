<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Usuario</title>
        <link rel="stylesheet" href="../../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../../assets/css/styles.css">
    </head>

    <body>

        <?php 
        include '../modulos/menu_administrador.php';
     ?>



    <br><br>
                    <div class="container bg-light
                    "><br>
                         <form method="POST" action="../../controlador/Usuario/guardarDatosFromus.php">     
                                <div class="card">
                                        <div class="card-header bg-purple">

                                            <div class="text-center text-light ">
                                                    <h1>Registro de Usuario</h1>
                                            </div>
                                                
                                                <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                                            
                                        </div>
                                </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Nombre completo</label>
                                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tipo de documento</label><br>
                                                          <input type="radio" name="ti_doc" value="C.C" id="ti_doc" class=""><label> C.C</label>
                                                          <input type="radio" name="ti_doc" value="C.E" id="ti_doc" class=""><label>C.E</label>
                                                          <input type="radio" name="ti_doc" value="PAS" id="ti_doc" class=""><label>PAS</label>
                                                    </div>
                                                     <div class="col-md-5">
                                                        <label>Sexo</label><br>
                                                         M <input type="radio" name="sexo" id="sexo" value="M">
                                                         F <input type="radio" name="sexo" id="sexo" value="F">
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Número de documento</label>
                                                    <input type="text" name="var_doc" id="var_doc" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Edad</label>
                                                    <input type="text" name="var_edad" id="var_edad" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>RH</label>
                                                    <input type="text" name="var_rh" id="var_rh" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Eps</label>
                                                    <input type="text" name="var_eps" id="var_eps" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Área protegida</label>
                                                    <input type="text" name="a_proteg" id="a_proteg" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Fecha de nacimiento</label>
                                                        <input type="date" name="fec_nac" id="fec_nac" min="0000-00-00" class="form-control">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Origen</label>
                                                        <input type="text" name="var_orig" id="var_orig" class="form-control">
                                                    </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Estado civil</label><br>
                                                    Casado(a) <input type="radio" name="es_civ" id="es_civ" 
                                                    value="Casado(a)">
                                                    Soltero(a) <input type="radio" name="es_civ" id="es_civ" value="Soltero(a)">
                                                    Divorciado(a) <input type="radio" name="es_civ" id="es_civ" value="Divorciado(a)">
                                                    Viudo(a) <input type="radio" name="es_civ" id="es_civ" value="Viudo(a)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Fecha y hora de ingresó</label>
                                                    <input type="datetime-local" name="hf_ing" id="hf_ing" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                                <label>Estrato</label>
                                                                <select name="estrato" id="estrato" class="form-control" >
                                                                            <option value="Uno">1</option>
                                                                            <option value="Dos">2</option>
                                                                            <option value="Tres">3</option>
                                                                            <option value="Cuatro">4</option>
                                                                            <option value="Cinco">5</option>
                                                                            <option value="seis">6</option>
                                                               </select>
                                                   </div>
                                                    <div class="col-md-5">
                                                        <label>Escolaridad</label>
                                                        <input type="text" name="var_esc" id="var_esc" class="form-control">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Diagnóstico</label><br>
                                                    <textarea name="diagnostico" cols="125" rows="3"  >
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        

                                         <div class="text-center ">
                                                <h4>  CONTACTAR EN CASO DE EMERGENCIA </h4><br>
                                         </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Nombre y apellidos</label>
                                                    <input type="text" name="nombre_apellido" id="nombre_apellido" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Teléfono</label>
                                                    <input type="tel" name="var_tel" id="var_tel" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Parentesco</label>
                                                    <input type="text" name="var_par" id="var_par" class="form-control">
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
                  

    </body>

</html>