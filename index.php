<?php
session_start();
if($_SESSION != null){
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="vista/css/login.css">
        <title>Login (no Obligatorio)</title>
    </head>
        <body>
            <form action="controlador/validar.php" method="POST">
               <div class="login-box">
                   <h1>Login</h1>
                    <div class="textbox">
                        <img src="vista/img/user.png"><input type="Text" required="nombre de usuario requerido" placeholder="Usuario" name="usuario"></p>
                    </div>

                    <div class="textbox">
                    <img src="vista/img/password.png"><input type="password" required="contraseña requerida" placeholder="Contraseña" name="contraseña"></p>
                    </div>

                        <input class="btn" type="submit" value="Ingresar" name="login">
                        <input class="btn" type="submit" value="Registrar" name="registrar">
                </div>
            </form>
        </body>
</html>