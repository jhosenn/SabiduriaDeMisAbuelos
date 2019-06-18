<?php 
    $conexion = mysqli_connect("localhost","rool","","sabiduriademisabuelos");
   if (!$conexion){
        echo'Error al conectarse a la base de datos';
    }
    else{
        echo'conectado a la base de datos';
    }
?>