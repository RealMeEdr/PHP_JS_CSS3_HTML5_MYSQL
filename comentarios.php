<?php

session_start();
$usuario = $_SESSION['usuario'];
if(!isset($usuario)){
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Moderna Erm</title>
    <link rel="stylesheet" href="vista/css/comentarios.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="inicio">
        <img src="img/hamburguesa.svg" alt="" class="hamburguer">
        <nav class="menu-navegacion">
            <?php
             echo "<a><h2>$usuario</h2></a>"; 
             ?>
            <a href="home.php">Inicio</a>
            
            <?php echo '<a href="../controlador/salir.php">Salir</a>';?>
        </nav>
        <div class="contenedor head">
        <form action="controlador/insertarComentario.php" method="POST" class="formulario">
                   <h1>Comentario</h1>
                   <div class="linea"></div>

                    <div class="textbox">
                        <input type="Text" placeholder="Nombre" value="<?php echo $usuario ?>" name="nombre">
                    </div>

                    <div class="textbox">
                        <input type="email" placeholder="Correo" name="correo">
                    </div>
                    <div class="textbox">
                        <input type="number" placeholder="Numero de contacto" name="numero">
                    </div>
                    <div class="">
                        
                        <input type="text" required placeholder="ingresa comentarios aquí" name="comentario" cols="48" rows="10">
                    </div>

                        <input class=" textbox btn" type="submit" value="Enviar">
            </form>
        </div>
    </header>
    <script src="vista/JS/menu.js"></script>
</body>
</html>
