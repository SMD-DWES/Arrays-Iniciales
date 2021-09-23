<?php
    $nombre = $_GET['nombre'];
    $correo = $_GET['email'];
    $chxDatos = $_GET['aportarDatos'];
    $datosText = $_GET['datosRow'];
    $files = $_GET['files'];

    echo '<p>Nombre: '. $nombre.'</p>';
    echo '<p>Email: '. $correo.'</p>';
    echo '<p>Aporta datos: '. $chxDatos.'</p>';
    echo '<p>Datos: '. $datosText.'</p>';
    echo '<p>Datos: '. $files.'</p>';
?>
