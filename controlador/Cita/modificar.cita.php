<?php
    require_once dirname(__DIR__, 2) . '/modelo/cita/guardar.cita.php';

    $respuesta = array(
        "Respuesta" => "OK",
        "error" => ""
    );


    if(isset($_POST)){
        $nombrecompleto = $_POST["nombreyapellido"];
        $id = $_POST["idcita"];
        $num_doc = $_POST["numerodocumento"];
        $hf_reg_for = $_POST["fecha_hora"];
        $asunto = $_POST["asunto"];
        $dire = $_POST["direccion"];


        $modelocita = new Modelocita();
        $respuesta["Respuesta"] = $modelocita->Modificarcita($id,$nombrecompleto,$num_doc,$hf_reg_for,$asunto,$dire );
        echo "<script>window.location = 'consultaGeneralCita.php';</script>";
    }



?>