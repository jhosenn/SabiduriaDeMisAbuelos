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

		include '../modulos/menu_administrador.php';
		require '../../modelo/conexion.php';


		 ?><br><br>

			<div class="container bg-light"><br>
				   <form method="POST" action="">
				   	      <div class="card">
                                <div class="card-header bg-purple">
                                     <div class="text-center text-light ">
                                         <h1>Medicacion</h1>
                                     </div>
                                                
                                          <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                                            
                                </div>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-10">
	                                    <label>Abuelo</label>
	                                     <select name="" id="" class="form-control" ><?php
	                                     	$conexion = new Conexion();
	                                     	$stmt = $conexion->prepare("select * from usuario ");
	                                     	$stmt->execute();
	                                     	$registros = $stmt->fetchAll(PDO::FETCH_OBJ);
	                                     	foreach ($registros as $value) {
	                                     		echo "<option value='$value->idusuario'>$value->nombrecompleto</option>";
	                                     	}

	                                         $registros=mysqli_query($conexion,) or
												die("Problemas en el select:".mysqli_error($conexion));

          										  while ($reg=mysqli_fetch_array($registros)) 
          										   {
             										
             									}?>
	                                    </select>
                                   </div>
							 </div>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-10">
	                                    <label>Medicamento</label>
	                                     <select name="" id="" class="form-control" ><?php
	                                     	$conexion = new Conexion();
	                                     	$stmt = $conexion->prepare("select * from_medicamento ");
	                                     	$stmt->execute();
	                                     	$registros = $stmt->fetchAll(PDO::FETCH_OBJ);
	                                     	foreach ($registros as $value) {
	                                     		echo "<option value='$value->idmedicamento'>$value->nombre_medi</option>";
	                                     	}

	                                         $registros=mysqli_query($conexion,) or
												die("Problemas en el select:".mysqli_error($conexion));

          										  while ($reg=mysqli_fetch_array($registros)) 
          										   {
             										
             									}?>
	                                    </select>
                                   </div>
							 </div>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                  <div class="col-md-5">
                                     <label>Cantidad</label>
                                     <input type="date" name="cantidad" id="cantidad"  class="form-control">
                                     </div>
                                     <div class="col-md-5">
                                        <label>Frecuencia</label>
	                                     <select name="" id="" class="form-control" ><?php
	                                     	$conexion = new Conexion();
	                                     	$stmt = $conexion->prepare("select * from_medicamento ");
	                                     	$stmt->execute();
	                                     	$registros = $stmt->fetchAll(PDO::FETCH_OBJ);
	                                     	foreach ($registros as $value) {
	                                     		echo "<option value='$value->idmedicamento'>$value->nombre_medi</option>";
	                                     	}

	                                         $registros=mysqli_query($conexion,) or
												die("Problemas en el select:".mysqli_error($conexion));

          										  while ($reg=mysqli_fetch_array($registros)) 
          										   {
             										
             									}?>
	                                    </select>
                                     </div>
                              </div>
                         </div>
                                        
				   </form>
			</div>	 

  </body>

</html>		 
            