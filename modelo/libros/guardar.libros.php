<?php

    require_once  dirname(__DIR__, 2) . '/modelo/conexion.php';

    class ModeloLibros{

        function ConsultarTodoLibros(){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("SELECT * FROM libros");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        function GuardarLibros($Titulo, $Id_editorial, $Edicion, $Anio_publicacion, $Asunto, $Ejemplares){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("INSERT INTO 'libros'( 'Titulo', 'Id_editorial', 'Edicion', 'Anio_publicacion', 'Asunto', 'Ejemplares') VALUES (:Titulo,:Id_editorial,[:Edicion],[:Anio_publicacion],[Asunto],[Ejemplares])";
            $stmt->bindParam(':Titulo', $Titulo PDO::PARAM_STR);
            $stmt->bindParam(':Id_editorial', $Id_editorial PDO::PARAM_STR);
            $stmt->bindParam(':Edicion', $Edicion PDO::PARAM_STR);
            $stmt->bindParam(':Anio_publicacion', $Anio_publicacion PDO::PARAM_STR);
            $stmt->bindParam(':Asunto', $Asunto PDO::PARAM_STR);
            $stmt->bindParam(':Ejemplares', $Ejemplares PDO::PARAM_STR);
            

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL GUARDAR EL LIBRO";
            }

            

        function ModificarAutores($Id_libros, $Titulo, $Edicion, $Anio_publicacion, $Asunto, $Ejemplares){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("UPDATE `libros`
                                        SET Titulo = :Titulo
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Titulo', $Titulo, PDO::PARAM_STR);
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }


            $stmt = $conexion->prepare("UPDATE `libros`
                                        SET Edicion = :Edicion
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Edicion', $Edicion, PDO::PARAM_STR);
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }

             $stmt = $conexion->prepare("UPDATE `libros`
                                        SET Anio_publicacion = :Anio_publicacion
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Anio_publicacion', $Anio_publicacion, PDO::PARAM_STR);
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }


            $stmt = $conexion->prepare("UPDATE `libros`
                                        SET Asunto = :Asunto
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Asunto', $Asunto, PDO::PARAM_STR);
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }

             $stmt = $conexion->prepare("UPDATE `libros`
                                        SET Ejemplares = :Ejemplares
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Ejemplares', $Ejemplares, PDO::PARAM_STR);
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }
        }

        function EliminarAutores($Id_libros){
            $conexion = new Conexion();

            $stmt = $conexion->prepare("DELETE FROM `libros`
                                        WHERE Id_libros = :Id_libros");
            $stmt->bindParam(':Id_libros', $Id_libros, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "ERROR AL MODIFICAR EL LIBRO";
            }
        }

    }


?>