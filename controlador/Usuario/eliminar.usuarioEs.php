<?php
    require_once dirname(__DIR__, 2) . '/modelo/usuario/guardar.usuario.php';

    

    if(isset($_GET)){
        $idusuario = $_GET["idusuario"];

        $modelousuario = new Modelousuario();
        $respuesta = $modelousuario->Eliminarusuario($idusuario);
       
       if($respuesta == "OK"){
        echo"
                <script>alert('Usuario eliminado con éxito');window.location='consultaEspecifica.php';</script>";
       }
    }

?>