<?php
    print_r($_GET);
    //GET Recoge la información por URL
    //REQUEST -> pruebas, contiene informacion de los post y gets
    //Formularios + arrays

    $nombre = $_GET['nombre'];
    $correo = $_GET['email'];

    $chxDatos = null;

    if(isset($_GET["aportarDatos"]))
        $chxDatos = $_GET["aportarDatos"];

    $datosText = $_GET['datosRow'];
    $files = $_GET['files'];

    echo '<p>Nombre: '. $nombre.'</p>';
    
    echo '<p>Email: '. $correo.'</p>';
    echo '<p>Aporta datos: '. $chxDatos.'</p>';

    if(!empty($_GET["aportarDatos"])) {
      echo '<p>Datos: '. $datosText.'</p>';
    } else {
        echo '<p>* Datos: No rellenado.</p>';
    }

    echo '<p>Fichero: '. $files.'</p>';
?>
