<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="estilos/servicos_estios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        <span id="logo">CHASEMOMENTUM</span>
        <ul>
            <li><a href="paginaPrincipal.php" class="navElemento">Home</a></li>
            <li><a href="paginaPrincipal.php" class="navElemento">Contact</a></li>
            <li> <a href="about.php" class="navElemento">About</a></li>
            <li><a href="blog.php" class="navElemento">Blog</a></li>
            <li><a href="servicios.php" class="navElemento">Services</a></li>
            <li><a href="proyectos.php" class="navElemento">Projects</a></li>
        </ul>
        <?php
        if (isset($_SESSION["user"])) {
            $nombre_usuario = $_SESSION["user"];
            echo"<ul class=inicios>
            <li id=nombreUsuario>$nombre_usuario</li>
            <li><a href=logout.php id=logout>Cerrar Sesion</a></li>
            </ul>";
        }
        else{
            echo"<ul class='inicios'>
            <li><a href='login.php' id='login'>Login</a></li>
            <li><a href='registro.php' id='register'>register</a></li></ul>";
        }
        ?>
    </nav>
    <div id="hola">
        Conoce a nuestros coaches y sus tarifas
    </div>
    <div class="panel">
        <div class="renglon">
            <div class="coach">
                <img src="estilos/imagenes/T1_Faker_2023_Split_2.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        Faker
                    </li>
                    <li>
                        <img src="estilos/imagenes/Challenger_Emblem_2022.png" alt="Challenger" class="rango">
                    </li>
                    <li>
                        Mid
                    </li>
                    <li>
                        Jugador Profesional
                    </li>
                    <li>
                        $50<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>

            <div class="coach">
                <img src="estilos/imagenes/DK_Canyon_2023_Split_2.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        Canyon
                    </li>
                    <li>
                        <img src="estilos/imagenes/Challenger_Emblem_2022.png" alt="Challenger" class="rango">
                    </li>
                    <li>
                        Jungla
                    </li>
                    <li>
                        Jugador Profesional
                    </li>
                    <li>
                        $100<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>
            <div class="coach">
                <img src="estilos/imagenes/ignite.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        1GNITE
                    </li>
                    <li>
                        <img src="estilos/imagenes/Season_2022_-_Bronze.jpg" alt="Bronce" class="rango">
                    </li>
                    <li>
                        Mid
                    </li>
                    <li>
                        Streamer
                    </li>
                    <li>
                        $50<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>
            
        </div>
        
        <div class="renglon">
            <div class="coach">
                <img src="estilos/imagenes/torombolo.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        t0r0mb0l0
                    </li>
                    <li>
                        <img src="estilos/imagenes/3.png" alt="Challenger" class="rango">
                    </li>
                    <li>
                        Mid
                    </li>
                    <li>
                        Alumno de excelencia
                    </li>
                    <li>
                        $100<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>

            <div class="coach">
                <img src="estilos/imagenes/cris.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        Cris
                    </li>
                    <li>
                        <img src="estilos/imagenes/Season_2022_-_Platinum.jpg" alt="Challenger" class="rango">
                    </li>
                    <li>
                        Support
                    </li>
                    <li>
                        Jugador de Magic
                    </li>
                    <li>
                        $100<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>
            <div class="coach">
                <img src="estilos/imagenes/h.jpg" alt="Faker" class="imagen">
                <ul>
                    <li id="nombre">
                        H
                    </li>
                    <li>
                        <img src="estilos/imagenes/Master_Emblem_2022.png" alt="Challenger" class="rango">
                    </li>
                    <li>
                        Top
                    </li>
                    <li>
                        Bot Specialist
                    </li>
                    <li>
                        $50<sub>/hora</sub>
                    </li>
                </ul>
                <a href="">Contratar</a>
            </div>
            
        </div>
    </div>
    <div class="footer">
        <span id="logo" style="color: #00b4d8;">CHASEMOMENTUM</span>
        <ul class="iconos">
            <li>Siguenos</li>
            <li><a href=""><img src="iconos/icons8-facebook-25.png" alt=""></a></li>
            <li> <a href=""><img src="iconos/icons8-instagram-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-twitter-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-linkedin-25.png" alt=""></a></li>
            <li><a href=""><img src="iconos/icons8-youtube-25.png" alt=""></a></li>
        </ul>
        <a href="terminos.html" class="terminos">Terminos legales</a>
    </div>
</body>
</html>