<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia="";
$nombre_DB="loginopiniones";

$conexion = new mysqli($servidor,$usuario,$contrasenia,$nombre_DB);
    if($conexion->connect_errno){
        die("la conexion ha fallado". $conexion->connect_errno);
    }else{
       // echo "<script>alert('Conexion exitosa')</script>";
    }
?>