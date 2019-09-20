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
            $stmt->bindParam('nombreyapellido', $nombrecompleto, 'numerodocumento', $identificacion, 'fecha_hora', $fechahora, 'asunto', $asunto, 'direccion', $direccion,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA CITA";
            }
        }
        
        function Modificarcita($idcita, $nombrecompleto, $identificacion, $fechahora, $asunto, $direccion){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `agendarcita`
                                        SET nombreEditorial = :nombreEditorial
                                        WHERE idcita = :idcita");
            $stmt->bindParam(':nombreyapellido', $nombrecompleto, PDO::PARAM_STR);
            $stmt->bindParam(':idcita', $idcita, PDO::PARAM_INT);
            $stmt->bindParam(':numerodocumento', $identificacion, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_hora', $fechahora, PDO::PARAM_STR);
            $stmt->bindParam(':asunto', $asunto, PDO::PARAM_STR);
            $stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);

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