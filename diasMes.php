<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
            //Me devuelve el numero de dias que tiene un mes a partir del mes pasado.
            function decirDias($numMes) {
                $mesDias = array(
                    31,
                    28,
                    31,
                    30,
                    31,
                    30,
                    31,
                    31,//8
                    30,
                    31,
                    30,
                    31
                );

                return $mesDias[$numMes];
            }

            //Devuelve el nombre del mes a partir del número del mes.
            function devolverMes($numMes) {
                //Defino arrays con valores.
                $mes = array(
                    1 => "Enero",
                    2 => "Febrero",
                    3 => "Marzo",
                    4 => "Abril",
                    5 => "Mayo",
                    6 => "Junio",
                    7 => "Julio",
                    8 => "Agosto",
                    9 => "Septiembre",
                    10 => "Octubre",
                    11 => "Noviembre",
                    12 => "Diciembre"
                );

                return $mes[$numMes];
            }

            //Mejora con tablas 2
            echo "<table class='test'>";
            echo "<tr>";

            for($i=1;$i<=12;$i++){
                echo '<th class="filEspacio">'.devolverMes($i).'</th>';
            }
            echo '</tr>';
            echo '<tr>';

            for($i=0;$i<=11;$i++){
                echo '<td>' . decirDias($i) . '</td>';
            }
            echo '</tr>';
            echo '</table>';
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");
            echo 'El mes numero 2 es el mes: '. devolverMes(2);

        ?>
    </body>
</html>