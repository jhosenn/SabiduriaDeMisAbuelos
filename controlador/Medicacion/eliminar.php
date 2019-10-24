<?php
    require_once dirname(__DIR__, 2) . '/modelo/medicacion/guardar.medicacion.php';

    if(isset($_GET)){
        $idformula = $_GET["idformula"];

        $modelomedicacion = new Modelomedicacion();
        $respuesta = $modelomedicacion->Eliminarmedicacion($idformula);

        if($respuesta == "OK"){
            echo "
                <script>alert('Medicación eliminada con éxito');window.location='consultaGeneralMedicacion.php';</script>
            ";
        }
    }

?>