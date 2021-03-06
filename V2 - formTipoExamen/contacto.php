<?php

    //Relleno array
    function rarray(){
        $array = array("Twitter","Instagram");
        return $array;
    }

    function generoOption() {
        foreach (rarray() as $key => $value) {
            echo "<option value='".$key."'>".$value . "</option>" ;
        }  
    }

    function cabecera() {
        echo '
        <!DOCTYPE html>
        <!-- Sergio Matamoros Delgado -->
        <html lang="es">
            <!--
                Especifico el head de la página junto a su etiqueta meta para 
                añadir el autor y descripción
            -->
            <head>
                <title>Grace Murray - Informática</title>
                <meta charset="UTF-8">
                <meta name="author" content="Sergio">
                <link href="formulario.css" rel="stylesheet" type="text/css">
                <!-- Uso dos css para tener más ordenado el código, en el caso
                del menú que es global, me interesa más que esté separado y así poder acceder a él más rapidamente. -->
                <link href="mainMenu.css" rel="stylesheet" type="text/css"> 
            </head>
        ';
    }


    cabecera();
    
    
?>

    <body>
        <!-- Aquí se le podría poner un nav, en contacto la URL tiene un # para indiciar que no lleva a 
        ningún sitio. -->
        <div class="header">
            <a href="index.html">Inicio</a>
            <a href="#">Contacto</a>
        </div>
        <form action="formularioDatos.php" method="POST">
            <!-- Campos de nombre y email. -->
            <label>Nombre:</label>
            <input name="nombre" type="text">
            <label id="encontrao">¿Cómo nos has encontrado?:</label>
            <select name="encontrado">
                <option value="Google">Google</option>
                <?php
                    generoOption();
                ?>
                <option value="Otro">Otro</option>
            </select>
            <!-- Empieza los radioButtons -->
            <input type="radio" name="aportarDatos" value="Sí">
            <label>Sí</label>
            <input type="radio" name="aportarDatos" value="No">
            <label>No</label>
            <!-- Aquí hace salto a la línea siguiente -->
            <label id="goBlock">Aportacion de datos:</label>
            <textarea name="datosRow" rows="3"></textarea>
            <!-- Permite enviar un documento al sevidor. -->
            <label>Enviar documento</label>
            <input type="file" name="files">
            <input class="send" name="enviar[]" type="submit" value="Enviar"/>
            <!-- "Limpia" el formulario, quedando los datos en blanco. -->
            <input class="send" type="reset" value="Reiniciar datos"/>
        </form>
    </body>
</html>