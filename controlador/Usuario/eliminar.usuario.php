<?php
    require_once dirname(__DIR__, 2) . '/modelo/usuario/guardar.usuario.php';

    $respuesta = array(
        "Respuesta" => "",
        "error" => ""
    );

    if(isset($_POST)){
        $idusuario = $_POST["idusuario"];

        $modelousuario = new Modelousuario();
        $respuesta["Respuesta"] = $modelousuario->Eliminarusuario($idusuario);
        echo json_encode($respuesta);
    }

?>