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
    <form method="POST" action="../../controlador/Medicacion/guardarDatosDeMedicacion.php">
      <div class="card">
        <div class="card-header bg-purple">
          <div class="text-center text-light">
            <h1>Medicación</h1>
          </div>
          <a class="btn btn-default btn-light" href="../inicio.php" role="button">Volver al inicio</a>
        </div>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">+</button>
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
          <label>Descripción</label><br>
          <textarea name="descripcion" cols="125" rows="3" placeholder="De que " >
          </textarea>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-purple">
        <h5 class="modal-title text-white " id="exampleModalLabel">Agregar Nuevo Medicamento</h5>
        <button type="button " class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="../../controlador/Medicamento/guardarDatosRegistroMedicamento.php">
        <div class="modal-body">
          <div class="card-body bg-light">
            <div class="row">
              <div class="col-md-10">
                <label>Nombre del medicamento</label>
                <input type="text" name="nom_medi" id="nom_medi" class="form-control">
              </div>
            </div>
          </div>
          <div class="card-body bg-light">
            <div class="row">
              <div class="col-md-10">
                <label>Descripción</label><br>
                <textarea name="descripcion" id="descripcion" cols="50" rows="4" placeholder="EJ: fecha de vencimiento, inyeccion,pasta">
                </textarea>
              </div>
            </div>
          </div>
          <div class="card-body bg-light">
            <div class="row">
              <div class="col-md-6">
                <label for="ddlEstado">Estado </label>
                <select name="estado" id="estado" class="form-control">
                  <option value="Activo">Activó</option>
                  <option value="Inactivo">Inactivo</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer bg-purple">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" >Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>

</html>		 
