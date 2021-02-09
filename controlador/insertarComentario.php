<?php
require('../modelo/conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$numero = $_POST['numero'];
$comentario = $_POST['comentario'];

$insert = "INSERT INTO comentarios (`nombre`, `correo`, `numero`, `comentario`) VALUES ('$nombre', '$correo', '$numero', '$comentario')";
$query = mysqli_query($conexion, $insert);

    if($query){
        echo '<script>alert("Su comentario a sido añadido a mi BD satisfactoriamente");
        window.location.href="../vista/comentarios.php";
        </script>';
    }else{
        echo '<script>alert("No pude guardar su comentario, intente de nuevo por favor.");
        window.location.href="../vista/comentarios.php";
        </script>';
    }
mysqli_close($conexion);
?>