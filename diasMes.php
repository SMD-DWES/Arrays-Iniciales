<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <meta charset="UTF-8">
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
                ); // Este array establece los días MANUALMENTE.

                $anio = date("Y");
                //Si el año es bisiesto, febrero tiene 29 días, si no lo es, tiene 28.
                if($anio % 4 == 0 && $anio %100 != 0 || ($anio %100 == 0 && $anio % 400 == 0)) 
                    $mesDias[1] = 29;
                else 
                    $mesDias[1] = 28;

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

            //Tabla con meses y días
            echo "<table>";
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

            //Año y dia actual.
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");

            //Visualiza el nombre de un mes concreto.
            echo '<br><br><br>El mes número 2 es el mes: '. devolverMes(2);
        ?>
    </body>
</html>