<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="stilosprincipal.css" >
</head>
<body>
<nav class="navbar">
        <div class="navbar__container">
        <div class="titulo">
            <img src="library.png" alt="Libreria logo">
            <li><strong>Libreria</strong></li>
        </div>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                    <a class="navbar__links" href="formulario.php">Agregar</a>
                    </li>
                    <li class="navbar__item">
                    <a class="navbar__links" href="consulta.php">Consultar</a>
                    </li>
                    <li class="navbar__item">
                    <a class="navbar__links" href="modificar.php">Modificar</a>
                    </li>
                    <li class="navbar__item">
                    <a class="navbar__links" href="eliminar.php">Eliminar</a>
                    </li>
                </ul>
            </div>
</nav>

    <header>
        <div class="hero">
            <b id="tit">Bienvenido</b>
        </div>
    </header>
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
        </ul>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="formulario.php">Agregar</a></li>
            <li><a href="consulta.php">Consultar</a></li>
            <li><a href="modificar.php">Modificar</a></li>
            <li><a href="eliminar.php">Eliminar</a></li>
        </ul>
        <p>2022 Jhon Lopez | All Rights Reserved</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="app.js"></script>
</body>
</html>