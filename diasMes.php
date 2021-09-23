<!-- Sergio Matamoros Delgado -->
<html>
    <head>
        <title>Pruebas array</title>
<<<<<<< HEAD
        <meta charset="UTF-8">
=======
>>>>>>> b5e2b6698fd604c8986f813960955c5eae612b57
        <link href="estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
<<<<<<< HEAD
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
=======
        

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
>>>>>>> b5e2b6698fd604c8986f813960955c5eae612b57
                    31,//8
                    30,
                    31,
                    30,
                    31
<<<<<<< HEAD
                ); // Este array establece los días MANUALMENTE.

                $anio = date("Y");
                //Si el año es bisiesto, febrero tiene 29 días, si no lo es, tiene 28.
                if($anio % 4 == 0 && $anio %100 != 0 || ($anio %100 == 0 && $anio % 400 == 0)) 
                    $mesDias[1] = 29;
                else 
                    $mesDias[1] = 28;

                return $mesDias[$numMes];
=======
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
>>>>>>> b5e2b6698fd604c8986f813960955c5eae612b57
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

<<<<<<< HEAD
            //Tabla con meses y días
            echo "<table>";
=======
            //Mejora con tablas 2
            echo "<table class='test'>";
>>>>>>> b5e2b6698fd604c8986f813960955c5eae612b57
            echo "<tr>";

            for($i=1;$i<=12;$i++){
                echo '<th class="filEspacio">'.devolverMes($i).'</th>';
            }
            echo '</tr>';
            echo '<tr>';
<<<<<<< HEAD
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
=======

            foreach(decirDias() as $indice) {
                if(isSet($indice["Febrero"][0]) == 28) 
                    echo '<td>' . 28 . '</td>';
                else if(isSet($indice["Febrero"][1]) == 29)
                    echo '<td>' . 29 . '</td>';
                else
                    echo '<td>' . $indice . '</td>';
            }
            echo '</tr>';
            echo '</table>';
            echo "<h2>Año actual: ". date("Y")."</h2>";
            echo 'Día actual: '. date("D M Y");
            echo '<br>El mes numero 2 es el mes: '. devolverMes(2);

>>>>>>> b5e2b6698fd604c8986f813960955c5eae612b57
        ?>
    </body>
</html>