<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SABIDURIA DE MIS ABUELOS</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">

</head>
<body>
    <?php 
    include '../modulos/menu_administrador.php';
     ?>
  
  


     <br><br>
		<div class="container bg-light"><br>
			<form method="POST" action="../../controlador/Usuario/consultaEspecifica.php">
					<div class="card">
                    <div class="card-header bg-purple "  >
                        <div class="text-center text-light">
                            <h1>Buscar Usuario</h1>
                        </div>
                        <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
                    </div>
            </div>
                <div class="card-body bg-light">
                        <div class="row">
                                <div class="col-md-10">
                                        <label> Nombre Del Paciente</label>
                                        <select name="datobuscar" id="datobuscar" class="form-control">
                                            <?php
                                                $conexion=mysqli_connect("localhost","root","","sabiduriademisabuelos");
                                                $registros=mysqli_query($conexion,"select * from usuario");
                                                while($row = mysqli_fetch_object($registros)){
                                                    echo '<option value="' . $row->nombrecompleto . '">' . $row->nombrecompleto . '</option>';
                                                }
                                            ?>
                                        </select>            
                                </div>
                        </div>
                </div>
                <div class="card-footer bg-purple">
                        <div class="text-center ">
                                <div class="btn-group">
                                        <input type="submit" name="Buscar" value="Buscar" class="btn btn-light">
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