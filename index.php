<?php
    require 'includes/functions.php';
    includeTemplate('header', $inicio = true, $visible = true);
?>
    <section class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Más sobre nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Mejor Precio">
                <h3>El mejor precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono A tiempo">
                <h3>A tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deserunt molestiae eligendi explicabo excepturi quaerat sint alias, vel eius cumque voluptate ipsa asperiores ducimus, quas nostrum minus itaque nesciunt delectus.</p>
            </div>
        </div>
    </section>

    <main class="contenedor seccion">
        <h2 class="fw-300 centrar-texto">Casas y Depas en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio casa en el lago">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono-wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono-estacionamiento">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono-dormitorio">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton1 d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio casa de lujo">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con diseno moderno, asi como teconologia inteligente y amueblada</p>
                    <p class="precio">$2,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono-wc">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono-estacionamiento">
                            <p>1</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono-dormitorio">
                            <p>3</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton1 d-block">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio casa de alberca">
                </picture>
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo, en la ciudad, excelente oportunidad.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono-wc">
                            <p>5</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono-estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono-dormitorio">
                            <p>6</p>
                        </li>
                    </ul>
                    <a href="anuncio.php" class="boton boton1 d-block">Ver Propiedad</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="anuncios.php" class="boton boton2">Ver Todas</a>
        </div>
    </main>

    <section class="imagen-contacto seccion">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños </h2>
            <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo en la brevedad</p>
            <div class="contactos"></div>
            <a href="contacto.php" class="boton boton1">Contactanos</a>
        </div>
        </div>
    </section>

    <div class="seccion-inferior contenedor seccion">
        <section class="blog">
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

        </section>

        <section class="testimoniales">
            <h3 class="fw-300 centrar-texto">Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>-Gabriela Ustariz</p>
            </div>
        </section>
    </div>

<?php includeTemplate('footer'); ?>