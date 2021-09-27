<?php
    print_r($_POST);
    //GET Recoge la información por URL
    //REQUEST -> pruebas, contiene informacion de los post y gets
    //Formularios + arrays


    //Estas variables las defino por la versión de php, en la 7.*
    //da un error de que no estan definidas (por estar en el if de abajo),
    //en cambio en la 8 no da ningún error.
    $nombre = null;
    $correo = null;
    $chxDatos = null;
    $datosText = null;
    $files = null;

    if(isset($_POST["nombre"])) $nombre = $_POST["nombre"];
    if(isset($_POST["email"])) $correo = $_POST["email"];
    if(isset($_POST["aportarDatos"])) $chxDatos = $_POST["aportarDatos"];
    if(isset($_POST["datosRow"])) $datosText = $_POST['datosRow'];
    if(isset($_POST["files"])) $files = $_POST['files'];

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
