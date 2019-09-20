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
		


		 ?><br><br>

		 <div class="container bg-light "><br>
		 	  <form method="POST" action="../../controlador/medicamento/guardarDatosRegistroMedicamento.php">
		 	  	   <div class="card">
		 	  	   	   <div class="card-header bg-purple">
		 	  	   	       <div class="text-center text-light">
		 	  	   	       	  <h1> Registro de medicamentos</h1>
		 	  	   	       </div>
		 	  	   	       <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al menu</a>	
		 	  	   	   </div>
		 	  	   	    
		 	  	   </div>
		 	  	   <div class="card-body bg-light">
		 	  	   	   <div class="row">
		 	  	   	   	   <div class="col-md-10">
		 	  	   	   	   	  <label>Nombre del medicamento</label>
		 	  	   	   	   	  <input type="text" name="nom_medi" id="nom_medi" class="form-control">
		 	  	   	   	   </div>
		 	  	   	   </div>
		 	  	   </div>
		 	  	   <div class="card-body">
                       <div class="row">
                          <div class="col-md-10">
	                            <label>Descripción</label><br>
	                            <textarea name="descripcion" id="descripcion" cols="125" rows="3" placeholder="EJ: fecha de vencimiento, inyeccion,pasta">
	                            	
	                            </textarea>
                          </div>
                      </div>
                 </div>

                 <div class="card-body">
                 <div class="row">
                    <div class="col-md-6">
                        <label for="ddlEstado">Estado </label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="Activo">Activó</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                </div><br>

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