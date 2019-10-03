<?php
    require_once dirname(__DIR__, 2) . '/modelo/medicacion/guardar.medicacion.php';

    $respuesta = array(
        "Respuesta" => "OK",
        "error" => ""
    );


    if(isset($_POST)){
        $idformula = $_POST["idformula"];
        $idusuario = $_POST["idusuario"];
        $idmedicamento = $_POST["idmedicamento"];
        $cantidad = $_POST["cantidad"];
        $frecuencia = $_POST["frecuencia"];
        $observacion = $_POST["observacion"];


        $modelomedicacion = new Modelomedicacion();
        $respuesta["Respuesta"] = $modelomedicacion->Modificarmedicacion($idformula,$idusuario,$idmedicamento,$cantidad,$frecuencia,$observacion );
        echo "<script>window.location = 'consultaGeneralMedicacion.php';</script>";
    }



?>