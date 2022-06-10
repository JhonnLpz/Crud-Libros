<html>
	<head>
		<title>Agregar Libro</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="stylesformulario.css">
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
					<li class="navbar__item">
                    <a class="navbar__links" id="inicio" href="index.php">Inicio</a>
                    </li>
                </ul>
        </div>
	</nav>
			<h1 class="h1"><strong>Agregar Libro</strong></h1>
	<div class="formulario">
		<form action="recogerLibros.php" method="post">
			<div class="part1">
				<h1>Titulo:</h1><br>
				<input id="titulo2"type="text" name="titulo" size="20" placeholder="Escriba el titulo" required/>

				<h1 id="autor">Autor:</h1><br>
				<input id="autor2"type="text" name="autor" min="10" max="75" placeholder="Autor" required/><br/>
			</div>
			<div class="part2">
				<h1>Genero:</h1><br>
			<input id="genero2"type="text" name="genero" placeholder="Genero" required/>

			<h1 id="editorial">Editorial:</h1><br>
			<input id="editorial2"type="text" name="editorial" placeholder="Editorial" required/><br/>
			</div>
			<div class="part3">
				<h1>Cantidad:</h1><br>
			<input id="cantidad2" min="1" type="number" name="cantidad" placeholder="Cantidad" required/>

			<h1 id="Publicacion">Publicacion:</h1><br>
			<input id="publicacion2"type="date" name="fechapublicacion" placeholder="Fecha Publicacion" required/><br>
			</div>
			<div class="part4">
				<br><h1 id="edicion">Edicion:</h1><br>
			<input id="edicion2" type="number" min="1" name="edicion" placeholder="Edicion" required/><br>

			<button id="boton" type="submit"><h2>Agregar Libro</h2></button>
			</div>
		</form>
	</div>
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