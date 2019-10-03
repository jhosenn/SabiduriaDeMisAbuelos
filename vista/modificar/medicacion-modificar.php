<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sabiduria De Mis Abuelos</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="#">Sabiduria De Mis Abuelos</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Medicacion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <?php
            require_once  dirname(__DIR__) . '/modelo/conexion.php';

            $id = $_GET["id"];
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM formula  WHERE idformula = :idformula");
            $stmt->bindValue(":idformula", $idformula, PDO::PARAM_INT);
            $stmt->execute();
            $registro = $stmt->fetch(\PDO::FETCH_OBJ);
            

        ?>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col"><button class="btn btn-success" onclick="ModificarRegistro(<?php echo $registro->idformula; ?>);" name="modificar" id="modificar" type="button">Modificar</button><button class="btn btn-dark" type="reset">Limpiar</button></div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Modificar Cita</h4>
                <h6 class="text-muted card-subtitle mb-2" style="color: rgb(125,109,108);">Todos los campos marcados con * son obligatorios</h6>
                <div class="row">
                    <div class="col"><label class="label-control">Medicacion *</label><input type="text" id="medicacion" placeholder="medicacion" class="form-control" style="width: 302px;" value="<?php echo $registro->idformula; ?>"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/cita.js"></script>
</body>

</html>