
<?php
    require_once dirname(__DIR__, 2) . '/modelo/usuario/guardar.usuario.php';

    $respuesta = array(
        "Respuesta" => "OK",
        "error" => ""
    );


    if(isset($_POST)){
        $nombre = $_POST["nombre"];
        $idusuario = $_POST["idusuario"];
        $ti_doc = $_POST["ti_doc"];
        $sexo = $_POST["sexo"];
        $var_doc = $_POST["var_doc"];
        $var_edad = $_POST["var_edad"];
        $var_rh = $_POST["var_rh"];
        $var_eps = $_POST["var_eps"];
        $a_proteg = $_POST["a_proteg"];
        $fec_nac = $_POST["fec_nac"];
        $var_orig = $_POST["var_orig"];
        $es_civ = $_POST["es_civ"];
        $hr_ing = $_POST["hr_ing"];
        $estrato = $_POST["estrato"];
        $var_esc = $_POST["var_esc"];
        $diagnostico = $_POST["diagnostico"];
        $nombre_apellido = $_POST["nombre_apellido"];
        $var_tel = $_POST["var_tel"];
        $var_par = $_POST["var_par"];


        $modelousuario = new Modelousuario();
        $respuesta["Respuesta"] = $modelousuario->Modificarusuario($id,$nombre,$ti_doc,$sexo,$var_doc,$var_edad,$var_rh,$var_eps,$a_proteg,$fec_nac,$var_orig,$es_civ,$hr_ing, $estrato,$var_esc,$diagnostico,$nombre_apellido, $var_tel,$var_par );
        echo "<script>window.location = 'consultaGeneral.php';</script>";
    }



?>