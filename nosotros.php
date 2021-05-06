<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <main class="contenedor">
        <h1 class="fw-300 centrar-texto">Conoce sobre nosotros</h1>
        <div class="contenido-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen de nosotros">
            </picture>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más sobre nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Mejor Precio">
                <h3>El mejor precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono A tiempo">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt 
                molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque 
                voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>
        </div>
    </section>

<?php includeTemplate('footer'); ?>