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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">+</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-purple">
        <h5 class="modal-title text-white " id="exampleModalLabel">Agregar Nuevo Medicamento</h5>
        <button type="button " class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="guardarDatosRegistroMedicamento.php">
             
             <div class="card-body bg-light">
                 <div class="row">
                     <div class="col-md-10">
                        <label>Nombre del medicamento</label>
                        <input type="text" name="nom_medi" id="nom_medi" class="form-control">
                     </div>
                 </div>
             </div>
             <div class="card-body bg-light ">
                       <div class="row">
                          <div class="col-md-10">
                              <label>Descripcion:</label><br>
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
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                </div> 
        </form>
      </div>
      <div class="modal-footer bg-purple">
        <button type="button" class="btn btn-primary" data-dismiss="modal"  >Cerrar</button>
        <button type="button" class="btn btn-primary" hrf="guardarDatosRegistroMedicamento.php">Guardar</button>
      </div>
    </div>
  </div>
</div>


  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>    
