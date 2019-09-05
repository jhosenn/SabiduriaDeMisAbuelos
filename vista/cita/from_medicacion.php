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


  ?>
  <br><br>

  <div class="container bg-light"><br>
    <form method="POST" action="guardarDatosDeMedicacion.php">
      <div class="card">
        <div class="card-header bg-purple">
          <div class="text-center text-light">
            <h1>Medicacion</h1>
          </div>
          <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-10">
              <label>Paciente</label>
              <select name="usua" id="usua" class="form-control">
                <?php
                $conexion = new Conexion();
                $stmt = $conexion->prepare("select * from usuario ");
                $stmt->execute();
                $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $value) {
                  echo "<option value='$value->idusuario'>$value->nombrecompleto</option>";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <label>Medicamento</label>
              <select name="medica" id="medica" class="form-control" >
                <?php
                $conexion = new Conexion();
                $stmt = $conexion->prepare("select * from medicamento ");
                $stmt->execute();
                $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($registros as $value) {
                  echo "<option value='$value->idmedicamento'>$value->nombre</option>";
                }
                ?>
              </select>
            </div>
            <button class="btn btn-white" title="Agregar Nuevo Medicamento">
             <h1><i class="icon-plus icon-">+</i></h1>
            </button>
          </div>
          <div class="row">
            <div class="col-md-5">
              <label>Cantidad</label>
              <input type="text" name="cant" id="cant" class="form-control">
            </div>
          
          
            <div class="col-md-5">
              <label>Frecuencia</label>
              <select name="fre" id="fre" class="form-control" >
                <option value="Cada 8 horas">Cada 8 horas</option>
                <option value="Cada 12 horas">Cada 12 horas</option>
                <option value="Cada 24 horas">Cada 24 horas</option>
                <option value="Cada 8 dias">Cada 8 dias</option>
                <option value="Cada 15 dias">Cada 15 dias</option>
              </select>
            </div>
          </div>  
          
        
        
            <div class="row">
                 <div class="col-md-5">
                  <label>Descripcion</label><br>
                  <textarea name="descripcion" cols="125" rows="3" placeholder="De que " >
                  </textarea>
               </div>
                        
           </div>
        </div>   
    </div>
                 
      

     <div class="card-footer bg-purple">
         <div class="text-center ">
             <div class="btn-group">
                  <input type="submit" name="Guardar" value="Guardar" class="btn btn-light">&nbsp; 
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
