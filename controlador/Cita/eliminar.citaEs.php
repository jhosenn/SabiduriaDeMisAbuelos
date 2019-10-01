<?php
    require_once dirname(__DIR__, 2) . '/modelo/cita/guardar.cita.php';

    if(isset($_GET)){
        $idcita = $_GET["idCita"];

        $modelocita = new Modelocita();
        $respuesta = $modelocita->Eliminarcita($idcita);

        if($respuesta == "OK"){
            echo "
                <script>alert('Cita eliminada con éxito');window.location='consultaEspecificaCita.php';</script>
            ";
        }
    }

?>