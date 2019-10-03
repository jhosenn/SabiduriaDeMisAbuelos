<?php 

$id = $_GET["idusuario"];
// LLAME LA CONEXION
// REALICE LA CONSULTA DE LA TABLA CITA CON EL ID OBTENIDO ARRIBA
// UNA VEZ TRAIGA EL REGISTRO SE ENCARGA DE MOSTRAR LOS VALORES EN LOS CAMPOS
    
$conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos") or
                          die("Problemas con la conexión");

                      $modificar=mysqli_query($conexion,"select * from usuario WHERE idusuario=$id  ") or
                        die("Problemas en el select:".mysqli_error($conexion));

                $reg=mysqli_fetch_object($modificar);



 ?>




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
        include dirname(__DIR__,2) .  '/vista/modulos/menu_administrador.php';
     ?>



    <br><br>
                    <div class="container bg-light
                    "><br>
                         <form method="POST" action="../../controlador/Usuario/modificar.Usuario.php">     
                                <div class="card">
                                        <div class="card-header bg-purple">

                                            <div class="text-center text-light ">
                                                    <h1> Modificar Usuario</h1>
                                            </div>
                                                
                                                <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                                            
                                        </div>
                                </div>
                                <input type="hidden" name="idusuario" value="<?php echo $reg->idusuario; ?>">

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Nombre completo</label>
                                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $reg->nombrecompleto; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Tipo de documento</label><br>
                                                         <input type="radio" name="ti_doc" value="T.I" id="ti_doc" class=""<?php
                                                            if($reg->tipodocumento == "T.I"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>T.I </label>
                                                         <input type="radio" name="ti_doc" id="ti_doc" value="R.C" class=""<?php
                                                            if($reg->tipodocumento == "R.C"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>R.C</label>
                                                          <input type="radio" name="ti_doc" value="C.C" id="ti_doc" class="" <?php
                                                            if($reg->tipodocumento == "C.C"){
                                                                echo "checked";
                                                            }
                                                          ?> ><label> C.C</label>
                                                          <input type="radio" name="ti_doc" value="C.E" id="ti_doc" class=""<?php
                                                            if($reg->tipodocumento == "C.E"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>C.E</label>
                                                          <input type="radio" name="ti_doc" value="PAS" id="ti_doc" class=""<?php
                                                            if($reg->tipodocumento == "PAS"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>PAS</label>
                                                    </div>
                                                     <div class="col-md-5">
                                                        <label>Sexo</label><br>
                                                          <input type="radio" name="sexo" id="sexo" value="M" class=""<?php
                                                            if($reg->sexo == "M"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>M</label>
                                                          <input type="radio" name="sexo" id="sexo" value="F" class=""<?php
                                                            if($reg->sexo == "F"){
                                                                echo "checked";
                                                            }
                                                          ?>><label>F</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Número de documento</label>
                                                    <input type="text" name="var_doc" id="var_doc" class="form-control" value="<?php echo $reg->numerodocumento; ?>"   >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Edad</label>
                                                    <input type="text" name="var_edad" id="var_edad" class="form-control" value="<?php echo $reg->edad; ?>">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>RH</label>
                                                    <input type="text" name="var_rh" id="var_rh" class="form-control" value="<?php echo $reg->rh; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Eps</label>
                                                    <input type="text" name="var_eps" id="var_eps" class="form-control" value="<?php echo $reg->eps; ?>">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Área protegida</label>
                                                    <input type="text" name="a_proteg" id="a_proteg" class="form-control" value="<?php echo $reg->areaprotegida; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                        <label>Fecha de nacimiento</label>
                                                        <input type="date" name="fec_nac" id="fec_nac" min="2000-01-01" class="form-control" value="<?php echo $reg->fechanacimiento; ?>">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label>Origen</label>
                                                        <input type="text" name="var_orig" id="var_orig" class="form-control" value="<?php echo $reg->origen; ?>">
                                                    </div>
                                            </div>
                                        </div>
                                        
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Estado civil</label><br>
                                                     <input type="radio" name="es_civ" id="es_civ" 
                                                    value="Casado(a)"><?php
                                                            if($reg->estadocivil == "Casado(a)"){
                                                                echo "checked";
                                                            }
                                                          ?> <label>Casado(a)</label>
                                                     <input type="radio" name="es_civ" id="es_civ" value="Soltero(a)"<?php
                                                            if($reg->estadocivil == "Soltero(a)"){
                                                                echo "checked";
                                                            }
                                                          ?>> <label>Soltero(a)</label>
                                                     <input type="radio" name="es_civ" id="es_civ" value="Divorciado(a)"<?php
                                                            if($reg->estadocivil == "Divorciado(a)"){
                                                                echo "checked";
                                                            }
                                                          ?>> <label>Divorciado(a)</label>
                                                     <input type="radio" name="es_civ" id="es_civ" value="Viudo(a)"<?php
                                                            if($reg->estadocivil == "Viudo(a)"){
                                                                echo "checked";
                                                            }
                                                          ?> ><label>Viudo(a)</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Fecha y hora de ingresó</label>
                                                    <input type="datetime-local" name="hf_ing" id="hf_ing" class="form-control" value="<?php echo $reg->fechaingreso; ?>">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body">
                                            <div class="row">
                                                    <div class="col-md-5">
                                                                <label>Estrato</label>
                                                                <select name="estrato" id="estrato" class="form-control" >
                                                                            <option value="Uno" <?php
                                                                                if($reg->estrato == "Uno"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?> >1</option>
                                                                            <option value="Dos" <?php
                                                                                if($reg->estrato == "Dos"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?>>2</option>
                                                                            <option value="Tres" <?php
                                                                                if($reg->estrato == "Tres"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?>>3</option>
                                                                            <option value="Cuatro" <?php
                                                                                if($reg->estrato == "Cuatro"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?>>4</option>
                                                                            <option value="Cinco" <?php
                                                                                if($reg->estrato == "Cinco"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?>>5</option>
                                                                            <option value="seis" <?php
                                                                                if($reg->estrato == "seis"){
                                                                                    echo "selected";
                                                                                }
                                                                              ?>>6</option>
                                                               </select>
                                                   </div>
                                                    <div class="col-md-5">
                                                        <label>Escolaridad</label>
                                                        <input type="text" name="var_esc" id="var_esc" class="form-control" value="<?php echo $reg->escolaridad; ?>">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Diagnóstico</label><br>
                                                    <textarea name="diagnostico" cols="125" rows="3" placeholder="Describe el diagnostico del Usuario"><?php echo $reg->diagnostico; ?></textarea>
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
                                                    <input type="text" name="nombre_apellido" id="nombre_apellido" class="form-control" value="<?php echo $reg->nombreyapellido; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Teléfono</label>
                                                    <input type="tel" name="var_tel" id="var_tel" class="form-control" value="<?php echo $reg->telefono; ?>">
                                                </div>
                                                <div class="col-md-5">
                                                    <label>Parentesco</label>
                                                    <input type="text" name="var_par" id="var_par" class="form-control" value="<?php echo $reg->parentesco; ?>">
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