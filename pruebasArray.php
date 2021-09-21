<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            //Defino arrays con valores.
            $mes = array(
            1=>"Enero",
            2=>"Febrero",
            3=>"Marzo",
            4=>"Abril",
            5=>"Mayo",
            6=>"Junio",
            7=>"Julio",
            8=>"Agosto",
            9=> "Septiembre",
            10=> "Octubre",
            11=> "Noviembre",
            12=> "Diciembre");
            
            //Recorrer el array con un foreach
            echo "Recorrer array con foreach<br><br>";
            foreach($mes as $index){
                echo $index . " <br>";
            }

            //Uso la función Print_r()
            echo "<br><br>Recorrer array con print_r <br>";
            print_r($mes);

            //Uso la otra forma del foreach
            echo "<br><br>Recorrer array con foreach <br>";
            foreach($mes as $index => $valor) {
                echo $index . ' ' . $valor . '<br>';
            }

            //RECORRER CON FOR
            echo "<br><br>Recorrer array con for y pongo que <b>empiece en 0</b> <br>";
            for($i=0; $i<=12;$i++) {
                echo $i . ' ' . $mes[$i] . '<br>';
            }

            //Visualizar el nombre de un mes a partir del índice.
            echo "<br><br>Visualizar el nombre de un mes concreto.<br>";
            echo 'El mes número 4 es: '. $mes[4];

            //Mejora con tablas
            echo "<br><br>Mejora con tablas: <br>";
            echo "<table border='2' cellspacing='0'>";
            echo "<tr>";
            foreach($mes as $index => $valores){
                echo '<th>'.$index.'</th>';
            }
            echo '</tr>';
            echo '<tr>';
            foreach($mes as $index => $valores){
                echo '<td class="filEspacio">' . $valores . '</td>';
            }
            echo '</tr>';
            echo '</table>';

            //Mejora con tablas 2
            echo "<br><br>Mejora con tablas 2: <br>";
            echo "<table border='2' cellspacing='0'>";
            echo "<tr>";
            foreach($mes as $index => $valores){
                echo '<th class="filEspacio">'.$valores.'</th>';
            }
            echo '</tr>';
            echo '<tr>';
            foreach($mes as $index => $valores){
                echo '<td>' . $index . '</td>';
            }
            echo '</tr>';
            echo '</table>';


        ?>
    </body>
</html>