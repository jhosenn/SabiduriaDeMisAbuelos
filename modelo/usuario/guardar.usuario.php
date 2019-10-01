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
                                            (`nombreEditorial`)
                                VALUES (:nombreEditorial);");
            $stmt->bindParam(':nombreEditorial', $nombreEditorial, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR LA EDITORIAL";
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