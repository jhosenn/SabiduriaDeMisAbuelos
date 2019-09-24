<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cambiar contraseña</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>

<body>
    <?php 
    include '../modulos/menu_administrador.php';


     ?>

     <br><br>
     <div class="container bg-light"><br>
     	<form method="POST" action="">
     		<?php 
     			 if(isset($_POST['editar'])){
    		require"../../modelo/conexion.php";

            $mysqli = new mysqli("localhost", "root", "", "sabiduriademisabuelos");
    		
    	 $passActual = $mysqli->real_escape_string($_POST['passactual']);
    	 $pass1 = $mysqli->real_escape_string($_POST['pass1']);
    	 $pass2 = $mysqli->real_escape_string($_POST['pass2']);

    	 $passActual = md5($passActual);
    	 $pass1 = md5($pass1);
    	 $pass2 = md5($pass2);

    	 $sqlA = $mysqli->query("SELECT contrasena FROM usuarios WHERE idUsuario = '".$_SESSION['idUsuario']."'");
    	 $rowA = mysqli_fetch_array($sqlA);

         if($rowA['contrasena'] == $passActual){

            if($pass1 == $pass2){
                $update = $mysqli->query("UPDATE usuarios SET contrasena = '$pass1' WHERE idUsuario = '".$_SESSION['idUsuario']."'");
                if($update){
                    echo'<script>
                            alert ("La contraseña se ha modificada con exito");
                            window.history.go(-1);
                        </script>';
                }    

            }else{
                echo'<script>
                        alert ("Las contraseñas no coinciden");
                        window.history.go(-1);
                    </script>';
            }

         }else{
            echo'<script>
                    alert ("La contraseña actual no coincide");
                    window.history.go(-1);
                </script>';
         }

    	 
    }
     		 ?>
     			     	   
     	   	   <div class="card">
                    <div class="card-header bg-purple">
                        <div class="text-center text-light">
                            <h1>Cambiar contraseña</h1>
                        </div>
                        <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                    </div>
               </div>

               <div class="card-body">
               	  <div class="row">
				     <div class="col-md-10">
				          <label>Contraseña actual</label>
				           <input type="password" name="passactual" id="passactual" class="form-control">
				      </div>
			       </div> 

			        <div class="row">
				     <div class="col-md-10">
				          <label>Nueva contraseña</label>
				           <input type="password" name="pass1" id="pass1" class="form-control">
				      </div>
			       </div> 

			        <div class="row">
				     <div class="col-md-10">
				          <label>Confirmar contraseña </label>
				           <input type="password" name="pass2" id="pass2" class="form-control">
				      </div>
			       </div>
			       <br><br>
			      <div class="card-footer bg-purple">
			         <div class="text-center ">
				         <div class="btn-group">
				              <input type="submit" name="editar" value="Cambiar contraseña" class="btn btn-light">&nbsp; 
				              <input type="reset" name="Limpiar" value="Limpiar" class="btn btn-light">
				         </div>
			         </div>
			      </div>
			      </form> 
               </div>
     	   	
     	   
     </div>	



<script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>     