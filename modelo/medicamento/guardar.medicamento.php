<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';
    class Modelomedicamento{

        function ConsultarTodomedicamento(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM medicamento");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function Guardarmedicamento($nombremedicamento){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO `medicamento`
                                            (`nombre`)
                                             (`descripcion`)
                                             (`estado`)
                                VALUES (:nombre);(:descripcion)(:estado)");
            $stmt->bindParam('nombre', $nom_medi, 'descripcion', $descripcion, 'estado', $estado,  PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR MEDICAMENTO";
            }
        }
        
        function ModificarEditorial($idEditorial, $nombreEditorial){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `editorial`
                                        SET nombreEditorial = :nombreEditorial
                                        WHERE idEditorial = :idEditorial");
            $stmt->bindParam(':nombreEditorial', $nombreEditorial, PDO::PARAM_STR);
            $stmt->bindParam(':idEditorial', $idEditorial, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LA EDITORIAL";
            }
        }

        function Eliminarmedicamento($idmedicamento){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `medicamento`
                                        WHERE idmedicamento = :idmedicamento");
            $stmt->bindParam(':idmedicamento', $idmedicamento, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR LOS MEDICAMENTOS";
            }
        }

    }


?>