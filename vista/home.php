
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
    <link rel="stylesheet" href="css/estilos.css">
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
            <a href="#inicio">Inicio</a>
            <a href="#servicio">Servicio</a>
            <a href="#portafolio">Portafolio</a>
            <a href="#expertos">Expertos</a>
            <a href="#contacto">Contacto</a>
            <a href="#comentario">Dejar comentario</a>
            <?php echo '<a href="../controlador/salir.php">Salir</a>';?>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">Bienvenido <?php echo "$usuario";?></h1>
            <p class="copy">Estás entrando a mi página con PHP y variables de sesión</p>
        </div>
    </header>
    <main>
        <section class="services contenedor"id="servicio">
            <h2 class="subtitulo">Mis demás sitios web y repositorios</h2>
            <div class="contenedor-servicio">
                <img src="img/Team building _Monochromatic.png" alt="">
                <div class="checklist-servicio">
                    <div class="service">
                        <h3 class="n-service"><span class="number">1</span> Diseño web</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Aspernatur sunt reprehenderit asperiores, molestiae mollitia
                            nesciunt maiores voluptatum facere incidunt aliquam.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Diseño web</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Aspernatur sunt reprehenderit asperiores, molestiae mollitia
                            nesciunt maiores voluptatum facere incidunt aliquam.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> Diseño web</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                            Aspernatur sunt reprehenderit asperiores, molestiae mollitia
                            nesciunt maiores voluptatum facere incidunt aliquam.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">Galeria</h2>
                <div class="contenedor-galeria">
                    <img src="img/1.jpg" alt="" class="img-galeria">
                    <img src="img/2.jpg" alt="" class="img-galeria">
                    <img src="img/3.jpg" alt="" class="img-galeria">
                    <img src="img/4.jpg" alt="" class="img-galeria">
                    <img src="img/5.jpg" alt="" class="img-galeria">
                    <img src="img/6.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <section class="imagen-light">
            <img src="img/bx-x.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </section>
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">Expertos en:</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="img/Innovation _Isometric.png" alt="">
                    <h3 class="n-expert">Analytics</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Lap top_Isometric.png" alt="">
                    <h3 class="n-expert">SEO</h3>
                </div>
                <div class="cont-expert">
                    <img src="img/Graduation_Isometric.png" alt="">
                    <h3 class="n-expert">Security</h3>
                </div>
                <div class="cont-expert" id="comentario">
                    <img src="img/Completed task _Two Color.png" alt="">
                    <h3 class="n-expert">Comentario</h3>
                    <p>Si quieres añadir un comentario por favor da click <a style="text-decoration:none" href="comentarios.php">aqui</a></p>
                </div>
            </section>
        </section>
    </main>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Edrei Real</h2>
                <p>Seré un experto para el beneficio de la tecnología</p>
            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-linkedin' ></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram' ></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
    <script src="JS/menu.js"></script>
    <script src="JS/lightbox.js"></script>
</body>
</html>