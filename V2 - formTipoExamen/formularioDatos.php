<?php
    print_r($_POST);
    //GET Recoge la información por URL
    //REQUEST -> pruebas, contiene informacion de los post y gets
    //Formularios + arrays

    $nombre = $_POST['nombre'];

    //Radio Button
    if(isset($_POST["aportarDatos"]))
        $chxDatos = $_POST["aportarDatos"];
    
    if(isset($_POST["encontrado"]))
        $encontrado = $_POST['encontrado'];
    
    if(isset($_POST["datosRow"]))
        $datosText = $_POST['datosRow'];

    if(isset($_POST["files"]))
        $files = $_POST ['files'];

    //Mostrar informacion

    echo '<p>Nombre: '. $nombre.'</p>';
    
    echo '<p>Aporta datos: '. $chxDatos.'</p>';

    if(!empty($_POST["aportarDatos"])) {
      echo '<p>Datos: '. $datosText.'</p>';
    } else {
        echo '<p>* Datos: No rellenado.</p>';
    }

    echo "¿Como nos has encontrado?: ".$encontrado;

    echo '<p>Fichero: '. $files.'</p>';
?>
