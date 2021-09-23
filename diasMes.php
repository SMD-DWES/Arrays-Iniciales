<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        

            //Me devuelve el numero de dias que tiene un mes a partir del mes pasado.
            function decirDias() {
                /*$mesDias = array(
                    31,
                    28,
                    31,//3
                    30,//4
                    31,//5
                    30,//6
                    31,//7
                    31,//8
                    30,
                    31,
                    30,
                    31
                );*/

                /*$anio = date("L");

                if(anio % 4 == 0 && anio % 100 != 0 || (anio % 100 == 0 && anio % 400 == 0)) {

                }*/

                $meses['Enero'] = 31;
                $meses['Febrero'][0] = 28;
                $meses['Febrero'][1] = 29;
                $meses['Marzo'] = 31;
                $meses['Abril'] = 30;
                $meses['Mayo'] = 31;
                $meses['Junio'] = 30;
                $meses['Julio'] = 31;
                $meses['Agosto'] = 31;
                $meses['Septiembre'] = 30;
                $meses['Octubre'] = 31;
                $meses['Noviembre'] = 30;
                $meses['Diciembre'] = 31;

               

                return $meses;
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

            foreach(decirDias() as $indice) {
                if($indice["Febrero"][0] == 28) 
                    echo '<td>' . 28 . '</td>';
                else if($indice["Febrero"][1] == 29)
                    echo '<td>' . 29 . '</td>';
                
                echo '<td>' . $indice . '</td>';
            }
            echo '</tr>';
            echo '</table>';
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");
            echo '<br>El mes numero 2 es el mes: '. devolverMes(2);

        ?>
    </body>
</html>