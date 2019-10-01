<?php
    require_once dirname(__DIR__, 2) . '/modelo/medicamento/guardar.medicamento.php';

    if(isset($_GET)){
        $idmedicamento = $_GET["idmedicamento"];

        $modelomedicamento = new Modelomedicamento();
        $respuesta = $modelomedicamento->Eliminarmedicamento($idmedicamento);

        if($respuesta == "OK"){
            echo "
                <script>alert('Medicamento eliminado con éxito');window.location='consultaGeneralMedicamento.php';</script>";
        }
    }

?>