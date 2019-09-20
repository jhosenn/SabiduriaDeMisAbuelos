<?php
    require_once dirname(__DIR__, 2) . '/modelo/cita/guardar.cita.php';

    $respuesta = array(
        "Respuesta" => "",
        "error" => ""
    );

    if(isset($_POST)){
        $nombrecompleto = $_POST["nombreyapellido"];
        $id = $_POST["idcita"];
        $identificacion = $_POST["numerodocumento"];
        $fechahora = $_POST["fecha_hora"];
        $asunto = $_POST["asunto"];
        $direccion = $_POST["direccion"];

        if($cita == ""){
            $respuesta["Respuesta"] = "MAL";
            $respuesta["error"] = "La cita viene vacío";

            echo json_encode($respuesta);

            return;
        }

        $modelocita = new Modelocita();
        $respuesta["Respuesta"] = $modelocita->Modificarcita($id,$nombrecompleto,$identificacion,$fechahora,$asunto,$direccion );
        echo json_encode($respuesta);
    }



?>