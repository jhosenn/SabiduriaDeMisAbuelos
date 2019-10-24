<?php
    require_once dirname(__DIR__, 2) . '/modelo/nota/guardar.nota.php';

    if(isset($_GET)){
        $idnota = $_GET["idnota"];

        $modelonota = new modelonota();
        $respuesta = $modelonota->Eliminarnota($idnota);

        if($respuesta == "OK"){
            echo "
                <script>alert('Nota eliminada con éxito');window.location='consultaGeneralNota.php';</script>
            ";
        }
    }

?>