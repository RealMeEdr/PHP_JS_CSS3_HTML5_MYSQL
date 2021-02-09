<?php
//incluimos la conexion a la BD para validar los datos que se recibirán
include('../modelo/conexion.php');
//recibe el valor del campo de usuario del index.php
    $form_usuario = $_POST['usuario'];
    $form_contra = sha1($_POST['contraseña']);
    $result;
    
    session_start();
    $_SESSION['usuario']=$form_usuario;


    //aqui valido si ya existe un usuario
    if(isset($_POST['login'])){
    $querySelect = "SELECT usuario,pass FROM inicio_login WHERE usuario='$form_usuario' and pass='$form_contra'";    
    $result = mysqli_query($conexion,$querySelect);
    $filas=mysqli_num_rows($result);
    if($filas){
        header('location: ../vista/home.php');
    }else{
        ?>
        <?php
        echo '<script>alert("Datos incorrectos, vuelva a intentar");
        window.location.href="../index.php";
        </script>';
        ?>
        <?php
    }
    mysqli_free_result($result);
    mysqli_close($conexion);
}
    //aqui valido si existe un usuario, y si en dado caso ya existe uno con el mismo nombre, mando un mensaje de que debe cambiar el nombre
    if(isset($_POST['registrar'])){
        $querySelect = "SELECT usuario FROM inicio_login WHERE usuario='$form_usuario'";  
        $result = mysqli_query($conexion,$querySelect);
        $filas=mysqli_num_rows($result);

        if($filas){
            echo '<script>alert("Ya hay un usuario con ese nombre");
            window.location.href="../index.php";
            </script>';
            mysqli_free_result($result);
            mysqli_close($conexion);
        }else{

        $queryinsert = "INSERT INTO inicio_login (`usuario`, `pass`) VALUES ('$form_usuario','$form_contra')";
        $result = mysqli_query($conexion, $queryinsert);

        echo '<script>alert("Registrado con éxito!");
        window.location.href="../vista/home.php";
        </script>';
        
        mysqli_free_result($result);
        mysqli_close($conexion);
        }

    }
?>