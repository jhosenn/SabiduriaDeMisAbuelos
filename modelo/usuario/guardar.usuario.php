<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class Modelousuario{

        function ConsultarTodousuario(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM usuario");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarusuario($nombreusuario){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `usuario`
                                            (`nombrecompleto`)
                                            (`tipodocumento`)
                                            (`sexo`)
                                            (`numerodocumento`)
                                            (`edad`)
                                            (`rh`)
                                            (`eps`)
                                            (`areaprotegida`)
                                            (`fechanacimiento`)
                                            (`origen`)
                                            (`estadocivil`)
                                            (`fechaingreso`)
                                            (`estrato`)
                                            (`escolaridad`)
                                            (`diagnostico`)
                                            (`nombreyapellido`)
                                            (`telefono`)
                                            (`parentesco`)
                                VALUES (`nombrecompleto`),(:tipodocumento),(:sexo),(:numerodocumento),(:edad),(:rh),(:eps),(:areaprotegida),(:fechanacimiento),(:origen),(:estadocivil),(:fechaingreso),(:estrato),(:escolaridad),(:diagnostico),(:nombreyapellido),(:telefono),(:parentesco);");
            $stmt->bindParam(':nombrecompleto', $nombre, ':tipodocumento',$ti_doc,':sexo',$sexo,':numerodocumento',$var_doc,':edad',$var_edad,':rh',$var_rh,':eps',$var_eps,':areaprotegida',$a_proteg,':fechanacimiento',$fec_nac,':origen',$var_orig,':estadocivil',$es_civ,':fechaingreso',$hr_ing,':estrato',$estrato,':escolaridad',$var_esc,':diagnostico',$diagnostico,':nombreyapellido',$nombre_apellido,':telefono',$var_tel,':parentesco',$var_par, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA USUARIO";
            }
        }
        
        function Modificarusuario($idusuario, $nombre,$ti_doc,$sexo,$var_doc,$var_edad,$var_rh,$var_eps,$a_proteg,$fec_nac,$var_orig,$es_civ,$estrato,$var_esc,$diagnostico,$nombre_apellido,$var_tel,$var_par){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `usuario`
                                        SET nombrecompleto = :nombrecompleto,
                                         tipodocumento = :tipodocumento,
                                         sexo = :sexo,
                                         numerodocumento = :numerodocumento,
                                         edad = :edad,
                                         rh = :rh,
                                         eps = :eps,
                                         areaprotegida = :areaprotegida,
                                         fechanacimiento = :fechanacimiento,
                                         origen = :origen,
                                         estadocivil = :estadocivil,
                                         estrato = :estrato,
                                         escolaridad = :escolaridad,
                                         diagnostico = :diagnostico,
                                         nombreyapellido = :nombreyapellido,
                                         telefono = :telefono,
                                         parentesco = :parentesco
                                        WHERE idusuario = :idusuario");
            $stmt->bindParam(':nombrecompleto', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':tipodocumento',$ti_doc, PDO::PARAM_STR);
            $stmt->bindParam(':sexo',$sexo, PDO::PARAM_STR);
            $stmt->bindParam(':numerodocumento',$var_doc, PDO::PARAM_STR);
            $stmt->bindParam(':edad',$var_edad, PDO::PARAM_STR);
            $stmt->bindParam(':rh',$var_rh, PDO::PARAM_STR);
            $stmt->bindParam(':eps',$var_eps, PDO::PARAM_STR);
            $stmt->bindParam(':areaprotegida',$a_proteg, PDO::PARAM_STR);
            $stmt->bindParam(':fechanacimiento',$fec_nac, PDO::PARAM_STR);
            $stmt->bindParam(':origen',$var_orig, PDO::PARAM_STR);
            $stmt->bindParam(':estadocivil',$es_civ, PDO::PARAM_STR);
            $stmt->bindParam(':estrato',$estrato, PDO::PARAM_STR);
            $stmt->bindParam(':escolaridad',$var_esc, PDO::PARAM_STR);
            $stmt->bindParam(':diagnostico',$diagnostico, PDO::PARAM_STR);
            $stmt->bindParam(':nombreyapellido',$nombre_apellido, PDO::PARAM_STR);
            $stmt->bindParam(':telefono',$var_tel, PDO::PARAM_STR);
            $stmt->bindParam(':parentesco',$var_par, PDO::PARAM_STR);
            $stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);

            if($stmt->execute()){
                
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL USUARIO";
            }
        }

        function Eliminarusuario($idusuario){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `usuario`
                                        WHERE idusuario = :idusuario");
            $stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR USUARIO";
            }
        }

    }


?>