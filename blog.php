<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <main class="seccion contenido-centrado conte">
        <h3 class="fw-300 centrar-texto">Nuestro blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <!-- No entiendo por que debo poner un div aqui -->
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                </a>
                <p>Escrito el <span>20/10/2019</span> por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejroes materiales y ahorrando dinero</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <!-- No entiendo por que debo poner un div aqui -->
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada de blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                <p>Escrito el <span>20/10/2019</span> por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejroes materiales y ahorrando dinero</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
            <!-- No entiendo por que debo poner un div aqui -->
            <picture>
                <source srcset="build/img/blog3.webp" type="image/webp">
                <source srcset="build/img/blog3.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog3.jpg" alt="Entrada de blog">
            </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php"><h4>Guía para la decoración de tu hogar</h4></a>
                <p>Escrito el <span>20/10/2019</span>  por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejroes 
                materiales y ahorrando dinero</p>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
            <!-- No entiendo por que debo poner un div aqui -->
            <picture>
                <source srcset="build/img/blog4.webp" type="image/webp">
                <source srcset="build/img/blog4.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/blog4.jpg" alt="Entrada de blog">
            </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php"><h4>Guía para la decoración de tu hogar</h4></a>
                <p>Escrito el <span>20/10/2019</span>  por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejroes 
                materiales y ahorrando dinero</p>
            </div>
        </article>
    </main>

<?php includeTemplate('footer'); ?>