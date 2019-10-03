<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class Modelomedicacion{

        function ConsultarTodomedicacion(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM formula");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarmedicacion($nombremedicacion){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `formula`
                                            (`idusuario`)
                                             (`idmedicamento`)
                                             (`cantidad`)
                                             (`frecuencia`)
                                             (`observacion`)
                                VALUES (:idusuario);(:idmedicamento)(:cantidad)(:frecuencia)
                                (:observacion)");
            $stmt->bindParam('idusuario', $idusuario, 'idmedicamento', $idmedicamento, 'cantidad', $cantidad, 'frecuencia', $frecuencia, 'observacion', $observacion,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA MEDICACION";
            }
        }
        
        function Modificarmedicacion($idformula, $idusuario, $idmedicamento, $cantidad, $frecuencia, $observacion){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `formula`
                                        SET idusuario = :idusuario,
                                        idmedicamento = :idmedicamento,
                                        cantidad = :cantidad,
                                        frecuencia = :frecuencia,
                                        observacion = :observacion
                                        WHERE idformula = :idformula");
            $stmt->bindParam(':idformula', $idformula, PDO::PARAM_STR);
            $stmt->bindParam(':idusuario', $idusuario, PDO::PARAM_INT);
            $stmt->bindParam(':idmedicamento', $idmedicamento, PDO::PARAM_STR);
            $stmt->bindParam(':cantidad', $cantidad, PDO::PARAM_STR);
            $stmt->bindParam(':frecuencia', $frecuencia, PDO::PARAM_STR);
            $stmt->bindParam(':observacion', $observacion, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA MEDICACION";
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
                return "ERROR AL MODIFICAR LA MEDICACION";
            }
        }

    }


?>