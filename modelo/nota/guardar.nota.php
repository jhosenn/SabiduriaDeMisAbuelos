<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class Modelonota{

        function ConsultarTodonota(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM nota");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarnota($nombrenota){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `nota`
                                            (`fecha_hora`)
                                              (`observacion`)
                                             
                                VALUES ((:fecha_hora)(:observacion)");
            $stmt->bindParam('fecha_hora', $fecha_hora, 'observacion', $observacion,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA NOTA";
            }
        }
       

        function Eliminarnota($idnota){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `nota`
                                        WHERE idnota = :idnota");
            $stmt->bindParam(':idnota', $idnota, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA NOTA";
            }
        }

    }


?>