<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class Modelomedicacion{

        function ConsultarTodomedicacion(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM formula");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarmedicacion($nombrecita){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `formula`
                                            (`idusuario`)
                                             (`idmedicamento`)
                                             (`cantidad`)
                                             (`frecuencia`)
                                             (`observacion`)
                                VALUES (:idusuario);(:idmedicamento)(:cantidad)(:frecuencia)
                                (:observacion)");
            $stmt->bindParam('idusuario', $usua, 'idmedicamento', $medica, 'cantidad', $cant, 'frecuencia', $fre, 'observacion', $descripcion,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR MEDICACIÓN";
            }
        }
        
        function Modificarmedicacion($idformula, $nombrecompleto, $identificacion, $fechahora, $asunto, $direccion){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `formula`
                                        SET nombreEditorial = :nombreEditorial
                                        WHERE idformula = :idformula");
            $stmt->bindParam(':nombreyapellido', $nombrecompleto, PDO::PARAM_STR);
            $stmt->bindParam(':idcita', $idcita, PDO::PARAM_INT);
            $stmt->bindParam(':numerodocumento', $identificacion, PDO::PARAM_STR);
            $stmt->bindParam(':fecha_hora', $fechahora, PDO::PARAM_STR);
            $stmt->bindParam(':asunto', $asunto, PDO::PARAM_STR);
            $stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA MEDICACIÓN";
            }
        }

        function Eliminarmedicacion($idformula){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `formula`
                                        WHERE idformula = :idformula");
            $stmt->bindParam(':idformula', $idformula, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA MEDICACIÓN";
            }
        }

    }


?>