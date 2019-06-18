<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sabiduría de mis abuelos | Carpeta</title>

    <link rel="stylesheet" href="./../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../assets/css/all.min.css">
</head>
<body>
    <?php
        include './modulos/menu.php';
    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Gestion de Menú</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="btn-group-sm">
                        <button class="btn btn-sm btn-primary"><span class="fa fa-list"></span> Listar</button>
                        <button class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Guardar</button>
                        <button class="btn btn-sm btn-primary"><span class="fa fa-edit"></span> Actualizar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="txtCodigo">Código *</label>
                        <input type="text" id="txtCodigo" name="txtCodigo" class="form-control" placeholder="Digite un identificador" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="txtMenu">Menú *</label>
                        <input type="text" id="txtMenu" name="txtMenu" class="form-control" placeholder="Digite un nombre para el menú">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="ddlEstado">Estado *</label>
                        <select name="ddlEstado" id="ddlEstado" class="form-control">
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/all.min.js"></script>

</html>