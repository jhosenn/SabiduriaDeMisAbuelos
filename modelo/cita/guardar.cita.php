<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class Modelocita{

        function ConsultarTodocita(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM agendarcita");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarcita($nombrecita){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `agendarcita`
                                            (`nombreyapellido`)
                                             (`numerodocumento`)
                                             (`fecha_hora`)
                                             (`asunto`)
                                             (`direccion`)
                                VALUES (:nombreyapellido);(:numerodocumento)(:fecha_hora)(:asunto)
                                (:direccion)");
            $stmt->bindParam('nombreyapellido', $nombrecompleto, 'numerodocumento', $num_doc, 'fecha_hora', $hf_reg_for, 'asunto', $asunto, 'direccion', $dire,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA CITA";
            }
        }
        
        function Modificarcita($idcita, $nombrecompleto, $num_doc, $hf_reg_for, $asunto, $dire){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `agendarcita`
                                        SET nombreyapellido = :nombreyapellido,
                                        numerodocumento = :numerodocumento,
                                        fecha_hora = :fecha_hora,
                                        asunto = :asunto,
                                        direccion = :direccion
                                        WHERE idcita = :idcita");
            $stmt->bindParam(':nombreyapellido', $nombrecompleto, PDO::PARAM_STR);
            $stmt->bindParam(':idcita', $idcita, PDO::PARAM_INT);
            $stmt->bindParam(':numerodocumento', $num_doc, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_hora', $hf_reg_for, PDO::PARAM_STR);
            $stmt->bindParam(':asunto', $asunto, PDO::PARAM_STR);
            $stmt->bindParam(':direccion', $dire, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA CITA";
            }
        }

        function Eliminarcita($idcita){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `agendarcita`
                                        WHERE idcita = :idcita");
            $stmt->bindParam(':idcita', $idcita, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA CITA";
            }
        }

    }


?>