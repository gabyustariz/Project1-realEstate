<?php

    //Base de datos
    require '../../includes/config/database.php';
    $db = conectDB();

    $consulta = "SELECT * FROM vendedor";
    $resultado1 = mysqli_query($db, $consulta);

    //Arreglo con mensajes de errores;
    $errores = [];

    $titulo = "";
    $precio = "";
    $descripcion = "";
    $habitaciones = "";
    $wc = "";
    $estacionamiento = "";
    $vendedorId = "";


    if ($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        if($_POST['vendedor']){$vendedorId = $_POST['vendedor'];}
        

        // Validaciones
        if(!$titulo){ $errores[] = "Debes añadir un título";}
        
        if(!$precio){ $errores[] = "El precio es obligatorio";}
        
        if(strlen($descripcion) < 50){ $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";}
        
        if(!$habitaciones){ $errores[] = "El numero de habitacioes es obligatorio";}

        if(!$wc){ $errores[] = "La cantidad de baños es obligatoria";}

        if(!$estacionamiento){ $errores[] = "La cantidad de puestos de estacionamiento es obligatoria";}

        if(!$vendedorId){$errores[] = "Elige un vendedor"; }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        if(empty($errores)){

            $query = " INSERT INTO propiedad (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ('$titulo', '$precio', '$descripcion','$habitaciones', '$wc', '$estacionamiento', '$vendedorId');";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado){

                //Redireccionar al usuario.
                header("Location: /admin");
            }
        }
    }





    require '../../includes/functions.php';
    includeTemplate('header');
?>

    <main class="contenedor seccion">

        <?php echo $titulo . " precio: " . $precio . " descripcion: " . $descripcion . " habitaciones: " .  $habitaciones . " wc: " .  $wc . " esta: " . $estacionamiento . " vendedorId: " . $vendedorId; ?>
        <h1 class="centrar-texto">Crear</h1>

        <a href="/admin" class="boton boton2">Volver</a>

        <?php foreach($errores as $error): ?>
            <p class="alert error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
            
        <form method="POST" action="/admin/properties/create.php">
            <fieldset>
                <legend>Información general</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">        
        
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">         
        
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" >
                
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            
            </fieldset>

            <fieldset>
                <legend>Información de Propiedad</legend>
                
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                <label for="wc">Baños :</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
            
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">

                    <option value="">--Seleccione vendedor--</option>

                    <?php while($vendedor = mysqli_fetch_assoc($resultado1)): ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '';?> value="<?php echo $vendedor['id'];?>">
                        <?php echo $vendedor['nombre'] . ' ' . ' ' . $vendedor['apellido']; ?>
                        </option>
                    
                        <?php endwhile; ?>
                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton2">

        </form>

    </main>


<?php
    includeTemplate('footer');
?>