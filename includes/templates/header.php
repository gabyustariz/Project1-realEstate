<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="https://images.vexels.com/media/users/3/128063/isolated/preview/c7e1a77f590593736735ff7a6368a769-verifique-el---cono-de-bienes-ra--ces-by-vexels.png">
    <link rel="stylesheet" href="build/css/styles.css";>
</head>

<body>
    <!-- isset para comprobar que una variable está definida isset y parentesis -->
    <header class="site-header <?php echo $inicio ? "inicio" : "";?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="display-mobile-menu">
                    <div class="mobile-menu">
                        <img src="build/img/barras.svg" alt="menu-navegation"/>
                    </div>
                    <a href="index.php">
                        <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                    </a>
                </div>
                <div class="container-right">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                    <div class="dark-mode-boton">
                        <img src="build/img/dark-mode.svg" alt="icono moon" />
                    </div>
                </div>
            </div>
            <h1 class="<?php echo $visible ? "" : "no-visible"; ?>">Venta de Casas y Departamentos Exclusivos de Lujo</h1>
        </div>
    </header>