<?php
    require 'includes/functions.php';
    includeTemplate('header');
?>

    <h1 class="fw-300 centrar-texto">Contacto</h1>

    <picture>
        <source srcset="/build/img/destacada3.webp" type="image/webp">
        <source srcset="/build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="/build/img/destacada3.jpg" alt="imagen-contacto">
    </picture>

    <main class="seccion contenido-centrado contenedor">

        <h2 class="fw-300 centrar-texto">Llena el formulario de Contacto</h2>
        <form>
            <fieldset>
                <legend>Información personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu nombre" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Tu correo" required>

                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" placeholder="Tu teléfono" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select id="opciones" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="cantidad">Presupuesto:</label>
                <input type="number">

            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado:</p>
                <div class="forma-contacto">
                    <label for="telef">Teléfono</label>
                    <input type="radio" id="telef" value="telefono" name="contacto">

                    <label for="correo">E-mail</label>
                    <input type="radio" id="correo" value="email" name="contacto">
                </div>

                <p>Si eligió teléfono, eliga la fecha y hora:</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <div class="boton-enviar">
                <input type="submit" value="Enviar" class="boton boton2">
            </div>

        </form>
    </main>

<?php includeTemplate('footer'); ?>