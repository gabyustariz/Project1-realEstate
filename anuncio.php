<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <h1 class="fw-300 centrar-texto">Casa de Venta con Alberca</h1>
    <main class="seccion contenido-centrado contenedor">
        <picture>
            <source srcset="/build/img/destacada.webp" type="image/webp">
            <source srcset="/build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada.jpg" alt="imagen-anuncio">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img src="/build/img/icono_wc.svg" alt="icono-wc">
                    <p>3</p>
                </li>
                <li>
                    <img src="/build/img/icono_estacionamiento.svg" alt="icono-estacionamiento">
                    <p>4</p>
                </li>
                <li>
                    <img src="/build/img/icono_dormitorio.svg" alt="icono-dormitorio">
                    <p>5</p>
                </li>
            </ul>
        </div>
        <div class="texto-centrado">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus. Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus. Lorem ipsum dolor sit amet consectetur
                adipisicing elit.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
        </div>

    </main>

<?php includeTemplate('footer'); ?>